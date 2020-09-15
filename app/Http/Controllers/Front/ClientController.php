<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\BloodType;
use App\Models\City;
use App\Models\Client;
use App\Models\Governorate;
use function App\Sabaawy\responseJson;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    use AuthenticatesUsers;

    public function register(Request $request)
    {
        $validator =validator()->make($request->all(),[
            'name'=>'required',
            'phone'=>'required|unique:clients', 'email'=>'required|unique:clients',
            'password'=>'required|confirmed',
            'birth_date'=>'required',
            'blood_type_id'=>'required',
        ]);

        if($validator->fails()){
            return responseJson('0',$validator->errors()->first(),$validator->errors());
        }
         $request->merge(['password'=>bcrypt($request->password)]);
         $client=Client::create($request->all());
         return redirect(route('front_home'));
    }
    public function login(Request $request)
    {
        $validator =validator()->make($request->all(),[
            'phone'=>'required',
            'password'=>'required',
        ]);
        $client=Client::where('phone',$request->phone)->first();
//        dd($client);
        $credentials =$request->only('phone','password');
//        return $client;
        if ($client)
        {
            if (Hash::check($request->password,$client->password))
            {
                if (Auth::guard('web_client')->attempt($credentials))
                {
                    return redirect(route('front_home'));
                }

                return 'حاول مرة اخري';

            }
        }
        return 'لا يوجد حساب مرتبط';
    }
    public function reset(Request $request)
    {
        $validator =validator()->make($request->all(),[
            'phone'=>'required',
        ]);

        if($validator->fails()){
            return responseJson('0',$validator->errors()->first(),$validator->errors());
        }
        $user = Client::where('phone',$request->phone)->first();
//        return responseJson('1','kkk',$client->all());
        if ($user){
            $code = rand(1111,9999);
            $update =$user->update(['pin_code' => $code]);

            if ($update){
//                //send email
//                Mail::to($user->email)
//                    ->bcc('mohamedsabaawy@gmail.com')
//                    ->send(new ResetPassword($code));

                return responseJson('1','برجاء فحص ايميلك',['pin_code'=>$code]);
            }else{
                return responseJson('0','بيانات الدخول غير صحيحة');
            }

        }else {
            return responseJson('0', 'بيانات الدخول غير صحيحة');
        }
    }
    public function newPassword(Request $request)
    {
        $validator =validator()->make($request->all(),[
            'pin_code'=>'required',
            'password'=>'required|confirmed'
        ]);

        if($validator->fails()){
            return responseJson('0',$validator->errors()->first(),$validator->errors());
        }
        $user = Client::where('pin_code',$request->pin_code)->first();
//        return responseJson('1','kkk',$client->all());
        if ($user){
            $user->password = bcrypt($request->password);
            $user->pin_code = null;
            $user->save();
            return responseJson('1','تم تغير الرقم السري',$user->all());
        }else{
            return responseJson('0','error','');
        }

    }
    public function loginForm(){
        return view('front/login');
    }

    public function registerForm()
    {
        $bloods =BloodType::all();
        $governorates =Governorate::all();
        $cities = City::all();
        return view('front.register' , compact('bloods','governorates','cities'));
    }

    public function logout(Request $request)
    {
        $this->guard('client_web')->logout();
        $request->session()->invalidate();
        return redirect('/');
    }
}

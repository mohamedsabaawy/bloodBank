<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Client;
use function App\Sabaawy\responseJson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    public function register(Request $request)
    {
        $validator =validator()->make($request->all(),[
            'name'=>'required',
            'phone'=>'required|unique:clients', 'email'=>'required|unique:clients',
            'password'=>'required|confirmed',
            'birth_date'=>'required',
            'blood_types_id'=>'required',
        ]);

        if($validator->fails()){
            return responseJson('0',$validator->errors()->first(),$validator->errors());
        }
         $request->merge(['password'=>bcrypt($request->password)]);
         $client=Client::create($request->all());
         $client->api_token = Str::random(60);
         $client->save();
        return responseJson('1','success',['api_token'=>$client->api_token,'password'=>$client->password , 'data'=>$client]);
    }
    public function login(Request $request)
    {
        $validator =validator()->make($request->all(),[
            'phone'=>'required',
            'password'=>'required',
        ]);

        if($validator->fails()){
            return responseJson('0',$validator->errors()->first(),$validator->errors());
        }
        $client = Client::where('phone',$request->phone)->first();
        if ($client){
            if (Hash::check($request->password,$client->password)){
                return responseJson('1','تم تسجيل الدخول',[
                   'api_token'=>$client->api_token ,
                    'client'=>$client
                ]);
            }else{
                return responseJson('0','بيانات الدخول غير صحيحة');
            }

        }else {
            return responseJson('0', 'بيانات الدخول غير صحيحة');
        }
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
}

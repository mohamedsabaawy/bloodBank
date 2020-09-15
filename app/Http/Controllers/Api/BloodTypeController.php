<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\BloodType;
use function App\Sabaawy\responseJson;
use Illuminate\Http\Request;

class BloodTypeController extends Controller
{
    public function Blood(){
        return responseJson('2','Success',BloodType::all());
    }

    public function Store(Request $request){

        $blood = BloodType::create($request->all());
        return responseJson(1,'success',$blood);
    }
}

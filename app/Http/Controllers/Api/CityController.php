<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use function App\Sabaawy\responseJson;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function Store(Request $request)
    {
        $city= City::create($request->all());
        return responseJson('1','success',$city);
    }

    public function Index(Request $request)
    {
        $city =City::where(function ($query) use($request){
            if ($request->has('governorates_id'))
            {
                $query->where('governorates_id',$request->governorates_id);
            }
        })->get() ;
        return responseJson('1','success',$city);
    }
}

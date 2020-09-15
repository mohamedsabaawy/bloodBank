<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Governorate;
use function App\Sabaawy\responseJson;
use Illuminate\Http\Request;

class GovernorateController extends Controller
{
    public function Index()
    {
        return responseJson('1','success',Governorate::all());
    }

    public function Store(Request $request)
    {
        $governorate = Governorate::create($request->all());
        return responseJson('1','success',$governorate);
    }
}

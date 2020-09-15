<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\BloodType;
use App\Models\DonationRequest;
use App\Models\Post;
use function App\Sabaawy\responseJson;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index(){

        return responseJson('','Success',DonationRequest::all());
    }

    public function Store(Request $request)
    {
        $post = DonationRequest::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'category_id'=>$request->category_id,
            'image'=>$request->image->store('image','public'),
        ]);
        return responseJson(1,'success',[
            'image'=> asset('storage/'.$post->image),
            'post'=> $post
        ]);
    }
}

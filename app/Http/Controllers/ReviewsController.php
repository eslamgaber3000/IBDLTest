<?php

namespace App\Http\Controllers;

use App\Models\review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ReviewsController extends Controller
{
    public function store(Request $request){
        $validate = Validator::make($request->all(),
        [
            'title' => 'required',
            'subject' => 'required',
            'rate' => 'required',
        ]);
        $errors = $validate->errors();

        if ($validate->fails()) {
            return Redirect::back()->withErrors($errors);
        }
        review::create([
            'title' =>  $request['title'],
            'subject' =>  $request['subject'],
            'user_id' =>  Auth()->user()->id,
            'rate' =>  $request['rate'],
            'date' =>  date("Y-m-d H:i:s"),
        ]);
        return redirect()->back()->with('message', 'Your Review Sent Successfully');

    }
}

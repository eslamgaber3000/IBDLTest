<?php

namespace App\Http\Controllers;


use App\Models\Homepage;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\partner;
use App\Models\portfolio;
use App\Models\Provider;
use App\Models\review;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{

public function index2(){

  $providers = Provider::get('country_id');
  $result = []; // because you have null items in your collection
  foreach($providers as $product) {
  array_push($result, $product->country_id);
  }
  $all_country= Country::whereIn('short_name',array_values($result))->orderBy('short_name','asc')->get();

  $homepage = Homepage::first();
  $partners = partner::get();
  $clients = portfolio::get();

    //  dd($homepage);


    $reviews = review::where('approved',1)->get();
        // dd($reviews);
    $rates = 0;
    foreach($reviews as $review){
        $rates +=  $review->rate ;
    }
    $all_rate =  ($rates / count($reviews)) ;
    $all_rate = round($all_rate,1);
    $star_rating =  ($all_rate / 5) * 100;
    $reviews_count = count($reviews);
    return view('index', compact('partners','clients','homepage','all_country','all_rate','star_rating','reviews_count'));

}

public function index (){
    return view('welcome');
}

public function version (Request $request){

    // Store a piece of data in the session...
    session(['ver' => $request->var]);


    $providers = Provider::get('country_id');
    $all_country= Country::whereIn('id',$providers)->orderBy('short_name','asc')->get();
    $homepage = Homepage::first();
    $partners = partner::get();

    $clients = portfolio::get();


    $reviews = review::where('approved',1)->get();
    $rates = 0;
    foreach($reviews as $review){
        $rates +=  $review->rate ;
    }
    $all_rate =  ($rates / count($reviews)) ;
    $all_rate = round($all_rate,1);
    $star_rating =  ($all_rate / 5) * 100;
    $reviews_count = count($reviews);
    
    return view('index', compact('partners','clients','homepage','all_country','all_rate','star_rating','reviews_count'));


}

public function anniversaryShow(){


    return view('annivirsary.index');
}




}

<?php

namespace App\Http\Controllers;

use App\Models\product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use AshAllenDesign\LaravelExchangeRates\Classes\ExchangeRate;
use Carbon\Carbon;
use Stevebauman\Location\Facades\Location;


class ShopController extends Controller
{
    public function index(Request $request){
        
        $products = product::get();
       $cartItems = Cart::content() ;
       $type = '';


         $ip = $request->ip();  
        $currentUserInfo = Location::get($ip);
           if($currentUserInfo->countryCode == 'EG' ||$currentUserInfo->countryCode == 'SD' || $currentUserInfo->countryCode == 'YE'
        || $currentUserInfo->countryCode == 'JO' || $currentUserInfo->countryCode == 'LB'){
            session(['shop_ver' => 'egy']);
        }elseif(substr($currentUserInfo->timezone, 0, 5) == 'africa'){
            session(['shop_ver' => 'africa']);
        }else{
            session(['shop_ver' => 'other']);
        }

        return view('shop.index',compact(['products','cartItems','type'])) ;

    }

    public function callBack(Request $request){

        
    }

    public function type(Request $request){
        $cartItems = Cart::content() ;
        $type = $request->type ;
        if($type == 'all'){
            $products = product::get();
        } else{
            $products = product::where('type',$type)->get();

        }

        return view('shop.index',compact(['products','cartItems','type'])) ;

    }

    public function cart(){
        $cartItems = Cart::content() ;
         return view('shop.cart',compact(['cartItems'])) ;
    }
}

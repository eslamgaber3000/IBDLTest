<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{


    // get all news
    public function get_all(){

        $all_news = news::orderBy('id', 'DESC')->paginate(18);
        return view('news.news',compact('all_news'));

   }


//    //single news details
//    public function news_details($slug){

//         $news_details = News::where('slug',$slug)->first();
//         $next_id = ($news_details->id) + 1 ;
//         $previous_id = ($news_details->id) - 1 ;
//         if(isset($next_id)){
//             $news_next = News::where('id',$next_id)->first();
//         };
//         if(isset($next_id)){
//             $news_previous = News::where('id',$previous_id)->first();
//         };
//         $h_news=News::orderBy('id','desc')->paginate(5);
//         return view('news.news_details',compact('news_details','h_news','news_next','news_previous'));

//    }


}

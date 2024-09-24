<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Homepage;
use App\Models\review;
use BotMan\BotMan\Storages\Storage;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
      $articles=Article::paginate(4); 
      $homepage = Homepage::first();
      $reviews = review::where('approved',1)->get();
      // dd($reviews);
      $rates = 0;
      foreach($reviews as $review){
      $rates += $review->rate ;
      }
      $all_rate = ($rates / count($reviews)) ;
      $all_rate = round($all_rate,1);
      $star_rating = ($all_rate / 5) * 100;
      $reviews_count = count($reviews);

        return view('Blog.home', compact('articles','homepage','all_rate','star_rating','reviews_count'));
    }



    public function show($id){
        $article = Article::find($id);
        $user=$article->user;
        // dd($article->user->avatar);
        $comments = $article->comments;
        $commentsNumber = $article->comments->count();
       

    
        return view('Blog.show', compact('article','comments','user','commentsNumber'));
    }



    public function test (){
        return view('Blog.test');

    }
    // public function image()
    // {

    //     $articles=Article::all();
    //     // dd($articles);
    //     return view('Blog.testImage',compact('articles'));
    // }
    // public function storeImage(Request $request)
    // {

    //     $image=$request->input('image');

    //     dd($image);

 
       
    // }



    
}

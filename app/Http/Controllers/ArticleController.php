<?php

namespace App\Http\Controllers;

use App\Models\Article;
use BotMan\BotMan\Storages\Storage;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
      $articles=Article::all(); 
      

        return view('Blog.home', compact('articles'));
    }



    public function show($id){
        $article = Article::find($id);
        $user=$article->user;
        // dd($article->user->avatar);
        $comments = $article->comments;
        $commentsNumber = $article->comments->count();
       
      
        return view('Blog.show', compact('article','comments','user','commentsNumber'));
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

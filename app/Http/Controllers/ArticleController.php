<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Auther;
use App\Models\Homepage;
use App\Models\Like;
use App\Models\review;
use BotMan\BotMan\Storages\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index(Request $request)
    {


    $searchKey = $request->input('search_key');

    $categories=ArticleCategory::all();
    $authers=Auther::all();

    // dd($categories,$authers);   
    $start_date=$request->input('start_date');
    $end_date=$request->input('end_date');
    $filter_author=$request->input('filter_author');
    $filter_category=$request->input('filter_category');

   //filter part

    if ($searchKey) {
    $articles = Article::where('title', 'LIKE', '%' . $searchKey . '%')
    ->orWhere('desc', 'LIKE', '%' . $searchKey . '%')
    ->paginate(6);
    }else {
    $articles=Article::orderBy('id', 'DESC')->paginate(6);
    }
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


    

    return view('Blog.home', compact('articles','homepage','all_rate','star_rating','reviews_count','categories','authers'));
    }



    public function show($id){
        $article = Article::find($id);
        // dd($article->article_category_id);
        $similartArticles = Article::where('article_category_id', $article->article_category_id)
        ->where('id', '!=', $article->id)
        ->skip(0)->take(3)->get();


        $shareComponent = \Share::page(
            url()->current()

        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()        
        ->reddit();
        
       
    
        return view('Blog.show', compact('article','similartArticles','shareComponent'));
    }



    public function filterArticle (Request $request){

        $homepage = Homepage::first();
        $categories=ArticleCategory::all();
        $authers=Auther::all();

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
        
        $start_date=$request->input('start_date');
        $end_date=$request->input('end_date');
        $article_category_id=$request->input('filter_category');
        $article_auther_id=$request->input('filter_auther');

        $query=Article::query();

        // Apply filter by start date
    if ($start_date) {
        $query->whereDate('created_at', '>=', $start_date);
    }

    // Apply filter by end date
    if ($end_date) {
        $query->whereDate('created_at', '<=', $end_date);
    }

    if ($article_category_id) {
        $query->where('article_category_id', $article_category_id);
    }
    if ($article_auther_id) {
        $query->where('auther_id', $article_auther_id);
    }

        // Get the filtered results
        $articles = $query->paginate(6) ;

        // dd($articles);  
       
        // $articles=Article::whereBetween('created_at', [$start_date, $end_date])->all();
        // dd($articles);
        // // ->where('article_category_id', $article_category_id)
        // // ->where('auther_id', $article_auther_id) 
        // // ->paginate(6);


        

        return view('Blog.home', compact('articles','homepage','all_rate','star_rating','reviews_count','categories','authers'));

    }

    public function storeLike (Request $request){
     $article_id=$request->input('article_id');

     $user_id=auth()->user()->id; 
    //  dd($user_id);


    
     $data=$request->validate([
        ['article_id'=>'required|exists:articles,id',
        'user_id'=>'required|exists: users,id']
     ]);


     $article=Article::findOrFail($article_id);
     if ($article->likes()->where('user_id', $user_id)->exists()) {

        // return response()->json(['error'=>'you have already liked this article'],409);
        return redirect()->back();
     }else{


         Like::create([
            'article_id' => $article_id,
            'user_id' => $user_id,
         ]);
     }


    //  return response()->json(['success'=>'done successfully'],200);


     return redirect()->back()->with('success','You have liked this article');
    }


    public function toggleLike(Article $article)
{
    $user = auth()->user();

    if ($article->likes()->where('user_id', $user->id)->exists()) {
        // If the post is already liked by the user, unlike it
        $article->likes()->where('user_id', $user->id)->delete();
        // return response()->json(['status' => 'unliked']);
        // dd("the article has been liked");
        return redirect()->back()->with('success ','you have liked this article');
    } else {
        // Otherwise, like the post
        $article->likes()->create(['user_id' => $user->id]);
        // return response()->json(['status' => 'liked']);
        dd("liked the article successfully"); 
    }
}





// public function articleSearch(Request $request)
// {
//     // Fetch the search key from the request
//     $searchKey = $request->input('search_key');

//     // Ensure the search key is not empty
//     if(!$searchKey) {
//         // Handle empty search case (you can redirect or show an error message)
//         return redirect()->back()->with('error', 'Search key is required');
//     }

//     // Query articles by title or description
//     $articles = Article::where('title', 'LIKE', '%' . $searchKey . '%')
//         ->orWhere('desc', 'LIKE', '%' . $searchKey . '%')
//         ->paginate(8); // Apply pagination after the query

//     // Fetch homepage data
//     $homepage = Homepage::first();

//     // Fetch approved reviews
//     $reviews = Review::where('approved', 1)->get();

//     // Calculate the average rating
//     $rates = 0;
//     $reviews_count = count($reviews);

//     if ($reviews_count > 0) {
//         foreach ($reviews as $review) {
//             $rates += $review->rate;
//         }
//         $all_rate = round(($rates / $reviews_count), 1);
//         $star_rating = ($all_rate / 5) * 100; // Calculate percentage for stars
//     } else {
//         // Default values when no reviews exist
//         $all_rate = 0;
//         $star_rating = 0;
//     }

//     // Return the view with the necessary data
//     return view('Blog.home', compact('articles', 'homepage', 'all_rate', 'star_rating', 'reviews_count'));
// }




    
}

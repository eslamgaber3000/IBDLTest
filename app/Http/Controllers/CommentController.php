<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $comments=Comment::all();
    //   dd($comments);
      return view('Blog.show',compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // dd('coment');
       $comment= $request->input('comment');

       $article_id= $request->input('article_id');
    //    dd($article_id);
       $request->validate([
        'article_id'=>'required|exists:articles,id',
        'comment' => 'required|min:10|max:500|string',
       ]);

    //    dd(Auth::user()->avatar);
       $comment=Comment::create([

        'comment' => $comment,
        'user_id' => auth()->user()->id,
        'article_id' => $request->input('article_id'),
       ]);

    //    dd($comment);
    //    return response()->json(array('comment' => "commet added successfully"));
    return redirect()->back()->with(['message'=>'commet added successfully']);
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('blog::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('blog::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}

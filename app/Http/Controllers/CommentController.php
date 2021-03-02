<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentPost;
use App\Http\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct(){
        $this->middleware('can:categories-panel,moderation-panel');
    }
    public function new(CommentPost $request)
    {
        $comment = new Comment($request->validated());
        Auth::user()->comment()->save($comment);
        return redirect()->back();
    }
}

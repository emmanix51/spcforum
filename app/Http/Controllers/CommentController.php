<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Thread;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function destroy(Comment $comment)
    {
        if (auth()->user()->id !== $comment->user_id) {
            abort(404);
        }
        $comment->delete(); // dapat parehas dadto sa route nimo Route::get('/threads/{thread}' kanang sulod sa {}
        return redirect()->route('users.show')->with('success', 'Deleted post successfully');
    }
    public function store(Thread $thread)
    {


        $comment = new Comment();
        $comment->thread_id = $thread->id;
        $comment->user_id = auth()->user()->id;
        $comment->content = request('content');
        $comment->save();

        return redirect()->route('threads.show', $thread->id)->with('success', "Comment posted successfully");
    }
}

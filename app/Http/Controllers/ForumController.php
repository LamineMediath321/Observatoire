<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ForumController extends Controller
{
    public function forum()
    {
        $forums = Forum::all();
        return view('forum', compact('forums'));
    }

    //Pour creer un forum
    public function create(Request $request)
    {
        $request->validate([
            'theme' => 'required|min:5',
            'description' => 'required|min:10',
        ]);


        $forum = Forum::create([
            'user_id' => Auth::id(),
            'theme' => $request->theme,
            'description' => $request->description,
        ]);

        $forum->save();

        return Redirect::route('forum');
    }

    public function commentsForum(Forum $forum)
    {

        return view('comments-forum', [
            'forum' => $forum
        ]);
    }

    public function commenter(Request $request)
    {
        $request->validate([
            'comment' => 'required'
        ]);

        $comment = Commentaire::create([
            'user_id' => Auth::id(),
            'forum_id' => $request->forum_id,
            'description' => $request->comment,
        ]);

        $comment->save();

        return Redirect::route('commentsForum', [
            'forum' => $request->forum_id
        ]);
    }
}

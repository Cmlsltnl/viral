<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use TCG\Voyager\Models\User;

class PostsController extends Controller
{

    //
    public function index()
    {
        $posts = Post::where('status', '=', 'PUBLISHED')->orderBy('created_at', 'desc')->paginate(1);

        return view('posts.index')->with('posts', $posts);
    }

}

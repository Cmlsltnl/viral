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
        $featWhere = [ 'status' => 'PUBLISHED', 'featured' => true ];
        $featuredPosts = Post::where($featWhere)->orderBy('created_at', 'desc')->paginate(6);

        return view('posts.index')->with('featuredPosts', $featuredPosts);
    }

}

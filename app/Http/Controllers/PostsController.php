<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use DB;
use App\Category;

class PostsController extends Controller
{

    //
    public function index()
    {
        $featWhere = [ 'status' => 'PUBLISHED', 'featured' => true ];
        $featuredPosts = Post::where($featWhere)->orderBy('created_at', 'desc')->take(6)->get();

        return view('posts.index')->with('featuredPosts', $featuredPosts);
    }


    public function single($slug)
    {
        $postWhere = [ 'status' => 'PUBLISHED', 'slug' => $slug ];
        $post = Post::where($postWhere)->firstOrFail();

        // Check if post is published or throw error

        return view('posts.single')->with('post', $post);
    }

}

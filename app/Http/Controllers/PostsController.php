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
        $featuredPosts = Post::where([ 'status' => 'PUBLISHED', 'featured' => true ])->orderBy('created_at',
            'desc')->take(6)->get();

        return view('posts.index')->with('featuredPosts', $featuredPosts);
    }


    public function single($slug)
    {
        $post = Post::where([ 'status' => 'PUBLISHED', 'slug' => $slug ])->firstOrFail();

        // Check if post is published or throw error

        return view('posts.single')->with('post', $post);
    }

}

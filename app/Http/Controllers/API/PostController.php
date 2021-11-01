<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return response()->json([
            'message'   => 'Success',
            'post'      =>  $post
        ], 200);
    }
}

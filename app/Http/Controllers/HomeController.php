<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function allPost(Request $request){
        $userid = $request->user()->id;
        $posts = Post::where('user_id', $userid)->get();
        return view('dashboard', ['posts'=>$posts]);
    }
}

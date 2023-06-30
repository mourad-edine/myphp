<?php

namespace App\Http\Controllers;

use App\Models\coach;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index(){

        
        return view('welcome');
    }

    public function create(){

        $post = Post::all();

        return view('test.index',[
            'post'=> $post
        ]);

    }

    public function coaching(){

        $coach = coach::all();

        return view('test.coach',[
            'coach'=> $coach
        ]);

    }

    public function reservation(){

        return view('test.reservation');
    }

    public function recherche(){

        return view('test.recherche');
    }
}

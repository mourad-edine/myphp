<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function listes(){
       $post = Post::all();

        return view('accueil',[
            'post'=> $post
        ]);


    }

    public function montrer($id){

        $ident = $id;
        return view('nombre',compact('ident'));
    }
    public function ajouter(){

        return view('add');
    }

    public function verifier(Request $request){
        $post = new Post();

        $post->question = $request->questions;
        $post->reponse = $request->reponses;
        $post->save();
        dd('post crée!');
    }
    

    public function modifverif(Request $request){

        
        $post = Post::find($request->ids);
        $post->update([
            'question'=> $request->nouveauquestion,
            'reponse' => $request->nouveaureponse
        ]);
        dd('post modifié');
    }

    public function modif($id){
        $posts = Post::find($id);

        return view('edit',[
            'post'=> $posts
        ]);
    }



}

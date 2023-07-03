<?php

namespace App\Http\Controllers;

use App\Models\coach;
use App\Models\cour;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index(){

        
        return view('welcome');
    }

    public function create(){

        $post = Post::take(4)->get();

        return view('test.index',[
            'post'=> $post
        ]);

    }

    public function coaching(){

        $coach = coach::take(4)->get();

        return view('test.coach',[
            'coach'=> $coach
        ]);

    }

    public function materiel(){

        return view('test.materiel');
    }

    public function recherche($id){
       $idy = $id;
       $client = Post::find($id);
       if(isset($_GET['requette'])){
          $resultat = $_GET['requette'];
          $coach = coach::where('nom','LIKE','%'.$resultat.'%')->orWhere('numero','LIKE','%'.$resultat.'%')->paginate(2);
          return view('test.recherche',[
            'coach' => $coach,
            'id' => $idy,
            'client' => $client
          ]);
        }else{

            return view('test.recherche',[
                'id' => $idy,
                'client'=> $client
            ]);
        }   
    }


    public function image(){
        return view('test.image');
    }

    public function modifier(Request $request){
        $post = Post::find($request->id);
        $post->update([
            'nom'=> $request->nom,
            'email' => $request->emails,
            'adress' => $request->adresse

        ]);

        if($post){
            return back()->with('modif','les donné ont été modifié');
        }else{
            return back()->with('pasmodif','erreur');

        }
    }


    public function creer(Request $request){

       $test = Post::create([
            'nom' => $request->input('nom'),
            'email' => $request->input('emails'),
            'adress' => $request->input('adresse')
        ]);
        if($test){
            return back()->with('success','les donné ont été inséré');
        }else{
            return back()->with('echec','erreur');

        }
    }


    public function reserver(Request $request){
        $test = cour::create([
            'post_id' => $request->input('id_client'),
            'coach_id' => $request->input('id_coach'),
        ]);
        if($test){
            return back()->with('success','reservé avec success');
        }else{
            return back()->with('echec','erreur');

        }
    }
}

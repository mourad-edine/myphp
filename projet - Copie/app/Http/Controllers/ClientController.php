<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Materiel;
use Illuminate\Http\Request;
use App\Models\Prof;
class ClientController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }


    public function index(){

        
        return view('welcome');
    }

    public function create(){

        $post = Client::take(4)->get();
        
        return view('test.index',[
            'post'=> $post
        ]);

    }

    public function coaching(){
        $coach = Prof::take(4)->get();
        
        return view('test.coach',[
            'coach'=> $coach
        ]);

    }


    public function recherche(int $id){

       $test = Prof::findOrFail($id);
       $idy = $id;
       $client = Client::findOrFail($id);
       if(isset($_GET['requette'])){
          $resultat = $_GET['requette'];
          $coach = Prof::where('nom','LIKE','%'.$resultat.'%')->orWhere('numero','LIKE','%'.$resultat.'%')->paginate(2);
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
        $post = Client::findOrFail($request->id);
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

       $test = Client::create([
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
       // dd($request->id_coach,$request->id_client);

       $client = Client::findOrFail($request->id_client);
       $prof = Prof::findOrFail($request->id_coach);

       $client->profs()->attach($prof);

       if($client){
        return back()->with('success','prof reservé avec succes');
       }else{
        return back()->with('echec','erreur');

       }
    }


    public function ajoutercoach(Request $request){
        $test = Prof::create([
            'nom' => $request->input('nom'),
            'email' => $request->input('emails'),
            'adress' => $request->input('adresse'),
            'numero' => $request->input('numero'),
            'prix' => $request->input('prix')
        ]);
        if($test){
            return back()->with('success','les donné ont été inséré');
        }else{
            return back()->with('echec','erreur');

        }
    }


    public function modifiercoach(Request $request){
        $post = Prof::findOrFail($request->id);
        $post->update([
            'nom'=> $request->nom,
            'email' => $request->emails,
            'adress' => $request->adresse,
            'prix' => $request->prix,
            'numero' => $request->numero

        ]);

        if($post){
            return back()->with('modif','les donné ont été modifié');
        }else{
            return back()->with('pasmodif','erreur');

        }
    }


    public function deletecoach(Request $request){
        $post = Prof::findOrFail($request->id);

        $post->delete();
        if($post){
            return back()->with('efface','les donné ont été supprimé');
        }else{
            return back()->with('pasefface','erreur');

        }

    }


    public function deleteclient(Request $request){
        $post = Client::findOrFail($request->id);

        $post->delete();
     
        if($post){
            return back()->with('efface','les donné ont été supprimé');
        }else{
            return back()->with('pasefface','erreur');

        }

    }

    public function abonnement(Request $request){

         /*$client = Client::all();
         return view('test.abonnement',[
            'client' => $client
         ]);*/
         $client = Client::take(4)->get();
         if(isset($request->requette)){
          $resultat = $request->requette;
          $clients = Client::where('nom','LIKE','%'.$resultat.'%')->orwhere('id','LIKE','%'.$resultat.'%')->paginate(2);
          return view('test.abonnement',[
            'clients' => $clients,
            'client' => $client
          ]);
        }else{

            return view('test.abonnement',[
                'client'=> $client
            ]);
        } 
    }


    public function information(int $id){

        $user = Client::findOrFail($id);
        return view('test.userinfo',[
            'user'=>$user   
        ]);
    }

    public function validation(Request $request){
        $mois = (int)$request->total;
        $prix = (int)$request->prix;
        $total = $mois * $prix;
        dd($mois,$prix,$total);
    }


    
    public function materiel(){

        return view('test.materiel');
    }


    
    public function addmateriel(Request $request){
        dd($request);
        $materiel = Materiel::create([

        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Team;
use App\Http\Requests\AjoutPlayerPost;

class JoueurController extends Controller
{
    public function index(){
        $players = Player::orderBy('pts','desc')->get();
        $teams = Team::with('player')->get();
        
        return view('joueur', ["players" => $players, "teams"=>$teams]);
    }

    public function show($id){
        $player = Player::find($id);
        
        return view('joueur', ["player" => $player]);
    }

    public function create(){
        $teams = Team::all();

        return view('joueurForm', ["teams" => $teams]);
    }

    public function store(AjoutPlayerPost $request){
        if($validated = $request->validated()){
            $player = new Player;

            $player->nom = $request->nom;
            $player->prenom = $request->prenom;
            $player->age = $request->age;
            $player->numero = $request->numero;
            $player->position = $request->position;
            $player->pj = $request->pj;
            $player->b = $request->b;
            $player->a = $request->a;
            $player->pts = $request->pts;
            $player->min_pun = $request->min_pun;
            $player->plus_et_moins = $request->plus_et_moins;
            $player->team_id = $request->team_id;

            $player->save();

            return redirect('/');
        } else {
            return redirect('/joueurs/create')->withInput();
        }  
    }
}

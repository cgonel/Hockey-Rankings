<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Team;

class EquipeController extends Controller
{
    public function index(){
        $teams = Team::orderBy('pts', 'desc')->get();

        return view('equipe', ["teams" => $teams]);
    }

    public function show($id){
        $team = Team::find($id);

        return view('equipe', ["team" => $team]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class MeneurController extends Controller
{
    public function index(){
        $points = Player::orderBy('pts', 'desc')->take(10)->get();
        $buts = Player::orderBy('b', 'desc')->take(10)->get();
        $assists = Player::orderBy('a', 'desc')->take(10)->get();
        $min_puns = Player::orderBy('min_pun', 'desc')->take(10)->get();

        return view('meneur', ["points"=>$points, "buts"=>$buts, "assists"=>$assists, "min_puns"=>$min_puns]);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Player;

class Ajout extends Model
{
    public function store(Request $request){
        $ajout = new Ajout;

        $ajout->user_id = Auth::user();
        $ajout->joueur = $player->nom . $player->prenom;

        $ajout->save();
    }
}

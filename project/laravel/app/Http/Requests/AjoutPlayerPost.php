<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AjoutPlayerPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => 'required|alpha',
            'prenom' =>  'required|alpha',
            'age' => 'required|integer',
            'numero' => 'required|integer',
            'position' => 'required|alpha',
            'pj' => 'required|integer',
            'b' => 'required|integer',
            'a' => 'required|integer',
            'pts' => 'required|integer',
            'min_pun' => 'required|integer',
            'plus_et_moins' => 'required|integer',
            'team_id' => 'required',
        ];
    }
    
    public function messages(){
        return [
            'nom.required' => "Le champ 'Nom' est requis.",
            'nom.alpha' => "Le champ 'Nom' ne peut contenir que des lettres.",

            'prenom.required' => "Le champ 'Prénom' est requis.",
            'prenom.alpha' => "Le champ 'Prénom' ne peut contenir que des lettres.",

            'age.required' => "Le champ 'Âge' est requis.",
            'age.integer' => "Le champ 'Âge' ne peut contenir que des chiffres.",

            'numero.required' => "Le champ 'Numéro' est requis.",
            'numero.integer' => "Le champ 'Numéro' ne peut contenir que des chiffres.",

            'position.required' => "Le champ 'Position' est requis.",
            'position.alpha' => "Le champ 'Position' ne peut contenir que des lettres.",

            'pj.required' => "Le champ 'Parties jouées' est requis.",
            'pj.integer' => "Le champ 'Parties jouées' ne peut contenir que des chiffres.",

            'b.required' => "Le champ 'Nb de buts' est requis.",
            'b.integer' => "Le champ 'Nb de buts' ne peut contenir que des chiffres.",

            'a.required' => "Le champ 'Nb de passes/assistances' est requis.",
            'a.integer' => "Le champ 'Nb de passes/assistances' ne peut contenir que des chiffres.",

            'pts.required' => "Le champ 'Nb de points' est requis.",
            'pts.integer' => "Le champ 'Nb de points' ne peut contenir que des chiffres.",

            'min_pun.required' => "Le champ 'Nb de minutes de punitions du joueur' est requis.",
            'min_pun.integer' => "Le champ 'Nb de minutes de punitions du joueur' ne peut contenir que des chiffres.",

            'plus_et_moins.required' => "Le champ 'Les plus et les moins du joueur' est requis.",
            'plus_et_moins.integer' => "Le champ 'Les plus et les moins du joueur' ne peut contenir que des chiffres.",
        ];
    }
}

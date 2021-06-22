@extends('layouts.master')

@section('content')
    <div class="title m-b-md">
        Ajouter un joueur:
    </div>

    <div class="links">
        <form action="/joueurs" method="post">
            @csrf
           
            <label for="nom">Nom:</label>
            <div>
                <input type="text" name="nom" id="nom" value={{old('nom')}}>
            </div>

            <label for="prenom">Prénom:</label>
            <div>
                <input type="text" name="prenom" id="prenom" value={{old('prenom')}}>
            </div>
            
            <label for="age">Âge:</label>
            <div>
                <input type="number" name="age" id="age"  value={{old('age')}}>
            </div>

            <label for="team_id">Équipe:</label>
            <div>
                <select name="team_id" id="team_id">
                    @foreach ($teams as $team)
                        <option value="{{$team->id}}">
                            {{$team->equipe}}
                        </option>
                    @endforeach
                </select>
            </div>

            <label for="numero">Numéro:</label>
            <div>
                <input type="number" name="numero" id="numero"  value={{old('numero')}}>
            </div>

            <label for="position">Position:</label>
            <div>
                <input type="text" name="position" id="position"  value={{old('position')}}>
            </div>

            <label for="pj">Parties jouées:</label>
            <div>
                <input type="number" name="pj" id="pj"  value={{old('pj')}}>
            </div>

            <label for="b">Nb de buts:</label>
            <div>
                <input type="number" name="b" id="b"  value={{old('b')}}>
            </div>

            <label for="a">Nb de passes/assistances:</label>
            <div>
                <input type="number" name="a" id="a"  value={{old('a')}}>
            </div>

            <label for="pts">Nb de points:</label>
            <div>
                <input type="number" name="pts" id="pts"  value={{old('pts')}}>
            </div>

            <label for="min_pun">Nb de minutes de punitions du joueur:</label>
            <div>
                <input type="number" name="min_pun" id="min_pun"  value={{old('min_pun')}}>
            </div>

            <label for="plus_et_moins">Les plus et les moins du joueur:</label>
            <div>
                <input type="number" name="plus_et_moins" id="plus_et_moins"  value={{old('plus_et_moins')}}>
            </div>
        
            <div>
                <input type="submit" name="submit" value="Ajouter">
            </div>
        </form>

        <div class="errors">
            @if($errors->any())
                <div>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{$error}} </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection
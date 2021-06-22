@extends('layouts.master')

@section('content')

    <!-- affichage liste joueurs -->
    @if (isset($players))
        <div class="title m-b-md">
            Statistiques
        </div>
        <div class="links">
            <!-- links des 4 categories -->
            <div>
                <a href="/meneurs">Page des meneurs</a>
            </div>
            
            <table style="width:100%">
                <tr>
                    <th>Joueur</th>
                    <th>Équipe</th>
                    <th>PJ</th>
                    <th>B</th>
                    <th>A</th>
                    <th>Pts</th>
                </tr>
                @foreach ($players as $player)
                <tr>
                    <td><a href="/joueurs/{{$player->id}}">{{$player->prenom}} {{$player->nom}}</a></td>
                    <td>{{$player->team_id}}</td>
                    <td>{{$player->pj}}</td>
                    <td>{{$player->b}}</td>
                    <td>{{$player->a}}</td>
                    <td>{{$player->pts}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    <!-- affichage joueur individuelle -->
    @else
        <!-- affiche image seulement si photo presente dans BDD -->
        @if (isset($player->photo))
            <?php $url = asset('storage/photos/' . $player->photo) ?>
            <img src="{{$url}}">
        @endif

        <!-- information joueurs -->
        <div class="title m-b-md">
            {{$player->prenom}} {{$player->nom}}
        </div>

        <p>Age: {{$player->age}}</p>
        <!-- EQUIPE <p>Nom: {{$player->age}}</p> -->
        <p>Numéro: {{$player->numero}} </p>
        <p>Position: {{$player->position}} </p>
        <p>Parties jouées: {{$player->pj}} </p>
        <p>Nb de buts: {{$player->b}} </p>
        <p>Nb de passes/assistances: {{$player->a}} </p>
        <p>Nb de points: {{$player->pts}} </p>
        <p>Nb de minutes de punitions du joueur: {{$player->min_pun}} </p>
        <p>Les plus et les moins du joueur: {{$player->plus_et_moins}} </p>
    @endif
@endsection
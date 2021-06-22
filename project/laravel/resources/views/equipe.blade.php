@extends('layouts.master')

@section('content')
    <!-- view du classement -->
    @if (isset($teams))
        <div class="title m-b-md">
            Classement
        </div>
        <div class="links">
            <table style="width:100%">
                <tr>
                    <th>Rang</th>
                    <th>Équipe</th>
                    <th>PJ</th>
                    <th>V</th>
                    <th>D</th>
                    <th>N</th>
                    <th>Pts</th>
                </tr>
                @foreach ($teams as $team)
                <tr>
                    <td>{{$team->position}}</td>
                    
                    <td>
                        <?php $url = asset('storage/logos/' . $team->logo) ?>
                        <img class="logo" src="{{$url}}">

                        <a href="equipes/{{$team->id}}">{{$team->equipe}}</a>
                    </td>
                    <td>{{$team->pj}}</td>
                    <td>{{$team->v}}</td>
                    <td>{{$team->d}}</td>
                    <td>{{$team->n}}</td>
                    <td>{{$team->pts}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    <!-- view equipe individuelle -->
    @else
        <?php $url = asset('storage/logos/' . $team->logo) ?>
        <img class="logo_ind" src="{{$url}}">
        
        <div class="title m-b-md">
            {{$team->equipe}}
        </div>

        <p>Division: {{$team->division}}</p>
        <p>Entraineur: {{$team->entraineur}}</p>
        <p>Abbréviation: {{$team->abbr}}</p>
        <p>Ville: {{$team->ville}}</p>
        <p>Rang: {{$team->position}}</p>
        <p>Rang dans la division: {{$team->position_div}}</p>
        <p>Parties jouées: {{$team->pj}}</p>
        <p>Nb de victoires: {{$team->v}}</p>
        <p>Nb de défaites: {{$team->d}}</p>
        <p>Nb de nulles: {{$team->n}}</p>
        <p>Nb de points: {{$team->pts}}</p>
        <p>Nb de buts pour: {{$team->bp}}</p>
        <p>Nb de buts contre: {{$team->bc}}</p>
        <p>Nb moyen de spectateurs présents à chaque partie: {{$team->moy_spectateurs}}</p>
        <p>Résultat des performances en séries éliminatoires: {{$team->resultat}}</p>
    @endif
@endsection
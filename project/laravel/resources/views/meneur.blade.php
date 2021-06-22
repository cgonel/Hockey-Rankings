@extends('layouts.master')

<!-- 4 categories de meneurs -->
@section('content')
    <div class="title m-b-md">
        Top 10 : Catégorie Points
    </div>
    <table style="width:100%">
        <tr>
            <th>Joueur</th>
            <th>Points</th>
        </tr>
        @foreach ($points as $point)
        <tr>
            <td><a href="/joueurs/{{$point->id}}">{{$point->prenom}} {{$point->nom}}</a></td>
            <td>{{$point->pts}}</td>
         </tr>
        @endforeach
    </table>

    <div class="title m-b-md">
        Top 10 : Catégorie Buts
    </div>
    <table style="width:100%">
        <tr>
            <th>Joueur</th>
            <th>Buts</th>
        </tr>
        @foreach ($buts as $but)
        <tr>
            <td><a href="/joueurs/{{$but->id}}">{{$but->prenom}} {{$but->nom}}</a></td>
            <td>{{$but->b}}</td>
         </tr>
        @endforeach
    </table>

    <div class="title m-b-md">
        Top 10 : Catégorie Assistances
    </div>
    <table style="width:100%">
        <tr>
            <th>Joueur</th>
            <th>Assistances</th>
        </tr>
        @foreach ($assists as $assist)
        <tr>
            <td><a href="/joueurs/{{$assist->id}}">{{$assist->prenom}} {{$assist->nom}}</a></td>
            <td>{{$assist->a}}</td>
         </tr>
        @endforeach
    </table>

    <div class="title m-b-md">
        Top 10 : Catégorie Minutes de Punition
    </div>
    <table style="width:100%">
        <tr>
            <th>Joueur</th>
            <th>Minutes de Punition</th>
        </tr>
        @foreach ($min_puns as $min_pun)
        <tr>
            <td><a href="/joueurs/{{$min_pun->id}}">{{$min_pun->prenom}} {{$min_pun->nom}}</a></td>
            <td>{{$min_pun->min_pun}}</td>
         </tr>
        @endforeach
    </table>
@endsection
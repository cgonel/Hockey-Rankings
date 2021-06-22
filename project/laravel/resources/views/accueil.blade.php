@extends('layouts.master')

@section('content')           
    <?php $url = asset('storage/logos/LNH.png') ?>
    <img  class="logo_home" src="{{$url}}">

    <div class="title m-b-md">
        Saison 1992-1993
    </div>

    <div class="links">
        <a href="/equipes">Classement général</a>
        <a href="/joueurs">Statistiques des joueurs</a>
        <!-- accessible seulement si authentifier -->
        @auth
            <a href="/joueurs/create">Ajouter un joueur</a>
        @endauth
    </div>
@endsection
       
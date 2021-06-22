<?php

/*
|--------------------------------------------------------------------------
| Les routes du projet
|--------------------------------------------------------------------------
|
| Les routes de base du projet sont déjà définies ici.
| Le nom des contrôleurs et des actions pour ces routes 
| sont indiquées: vous pouvez les utiliser tel quel ou 
| les modifier à votre gré.
|
| Notez par contre que ces contrôleurs doivent être créés. 
|
*/

// La route de la page d'accueil
Route::get('/', function () {
    return view('accueil');
});

// Les routes pour les équipes. 
Route::get('/equipes/{id}', "EquipeController@show");
Route::get('/equipes', "EquipeController@index");

// Les routes pour les joueurs
Route::get('/joueurs/create', "JoueurController@create")->middleware('auth');
Route::get('/joueurs/{id}', "JoueurController@show");
Route::post('/joueurs', "JoueurController@store")->middleware('auth');
Route::get('/joueurs', "JoueurController@index");

//Route des meneurs
Route::get('/meneurs', "MeneurController@index");


// Les routes pour l'authentification
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

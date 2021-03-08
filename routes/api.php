<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//get Utilisateur
Route::get('utilisateur','App\Http\Controllers\UtilisateurController@getUtilisateur');

//get prospect
 //Route::get('prospect','App\Http\Controllers\ProspectController@getProspect');

// Get Specific utilisateur detail
Route::get('utilisateur/{id}', 'App\Http\Controllers\UtilisateurController@getUtilisateurById');

// Add Utilisateur
Route::post('addUtilisateur', 'App\Http\Controllers\UtilisateurController@addUtilisateur');

// Update Utilisateur
Route::put('updateUtilisateur/{id}', 'App\Http\Controllers\UtilisateurController@updateUtilisateur');

// Delete Utilisateur
Route::delete('deleteUtilisateur/{id}', 'App\Http\Controllers\UtilisateurController@deleteUtilisateur');
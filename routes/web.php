<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', "LoginController@login")->name("login");
Route::post('/login', "LoginController@controllaLogin");
Route::get('/logout', "LoginController@logout")->name("logout");

Route::get('/signup', "SignupController@index")->name("signup");
Route::post('/signup', "SignupController@creaAccount");
Route::get('/signup/email/{query}', "SignupController@controllaEmail");
Route::get('/signup/username/{query}', "SignupController@controllaUsername");

Route::get('/carica_carrello', "CarrelloController@caricaCarrello");

Route::get('/aggiungi_videogioco/{articolo}/{prezzo}', "CarrelloController@aggiungiVideogioco");
Route::get('/aggiungi_merchandise/{articolo}/{prezzo}', "CarrelloController@aggiungiMerchandise");
Route::get('/aggiungi_abbonamento/{articolo}/{prezzo}', "CarrelloController@aggiungiAbbonamento");

Route::get('/elimina_articolo/{articolo}', "CarrelloController@eliminaArticolo");
Route::get('/diminuisci_quantita/{articolo}', "CarrelloController@diminuisciQuantita");
Route::get('/aumenta_quantita/{articolo}', "CarrelloController@aumentaQuantita");

Route::get('/homepage', "HomepageController@index")->name("homepage");
Route::get('/homepage/json', "HomepageController@homepagejson");

Route::get('/videogiochi_popolari', "ArticoliController@indexvideogiochipopolari")->name("videogiochi_popolari");
Route::get('/videogiochi_popolari/json', "ArticoliController@videogiochipopolarijson");

Route::get('/videogiochi_nuovi_arrivi', "ArticoliController@indexvideogiochinuoviarrivi")->name("videogiochi_nuovi_arrivi");
Route::get('/videogiochi_nuovi_arrivi/json', "ArticoliController@videogiochinuoviarrivijson");

Route::get('/abbonamenti', "ArticoliController@indexabbonamenti")->name("abbonamenti");
Route::get('/abbonamenti/json', "ArticoliController@abbonamentijson");

Route::get('/merchandise', "ArticoliController@indexmerchandise")->name("merchandise");
Route::get('/merchandise/json', "ArticoliController@merchandisejson");

Route::get('/amiibo', "CuriositaController@indexamiibo")->name("amiibo");
Route::get('/amiibo/{query}', "CuriositaController@amiibo");

Route::get('/metacritic', "CuriositaController@indexmetacritic")->name("metacritic");
Route::get('/metacritic/{query}', "CuriositaController@metacritic");
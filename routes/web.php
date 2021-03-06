<?php

use App\Http\Controllers\Auth\RegisterController;
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

Route::view('/','pages/index')->name('index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth','first.login');
Route::get('/liste_themes','ThemesController@all_themes')->name('liste_des_themes')->middleware('auth');
Route::get('/mon_profil','ProfilsController@mon_profil')->name('mon_profil')->middleware('auth');
Route::get('/change_password','ChangePasswordController@create')->name('form_change_password')->middleware('auth');
Route::post('/change_password','ChangePasswordController@store')->name('update_password')->middleware('auth');
Route::resource('annees','AnneeController')->middleware('auth');
//Route utiliser pour selectionner l'annee active
Route::get('/annee_active/{id}','AnneeController@annee_active')->name('annee_active')->middleware('auth');
//Gestions des pièces détachées
Route::resource('fournisseur', 'FournisseurController')->middleware('auth');
Route::resource('arrivage', 'ArrivageController')->middleware('auth');
Route::resource('voiture','VoitureController')->middleware('auth');
//route permettant d'afficher les voitures par arrivage
Route::get('/voiture/arrivage/{id}','VoitureController@voiture_par_arrivage')->name('voiture_par_arrivage')->middleware('auth');
Route::resource('piece','PieceController');
//route permettant d'afficher les pièces par arrivage
Route::get('/piece/arrivage/{id}','PieceController@piece_par_arrivage')->name('piece_par_arrivage')->middleware('auth');
Route::resource('vente_piece', 'VentePieceController');
Route::get('/credit_piece','VentePieceController@credit_piece')->name('credit_piece')->middleware('auth');
Route::resource('remboursement_piece', 'RemboursementPrixPieceController')->middleware('auth');
Route::resource('vente_voiture','VenteVoitureController')->middleware('auth');
Route::get('/credit_voiture','VenteVoitureController@credit_voiture')->name('credit_voiture')->middleware('auth');
Route::get('/historique_paiement_voiture/{id}','VenteVoitureController@historique_paiement')->name('historique_paiement_voiture')->middleware('auth');
Route::delete('/delete_paiement_voiture/{id}','VenteVoitureController@delete_paiement')->name('delete_paiement_voiture')->middleware('auth');
Route::resource('divers', 'DiversContenusController')->middleware('auth');
Route::get('/divers/arrivage/{id}','DiversContenusController@divers_par_arrivage')->name('divers_par_arrivage')->middleware('auth');
Route::resource('vente_divers', 'VenteDiversController')->middleware('auth');
Route::resource('travailleur', 'TravailleurController')->middleware('auth');
Route::resource('paiement_travailleur', 'PaiementTravailleurController')->middleware('auth');
Route::resource('credit_travailleur', 'CreditTravailleurController')->middleware('auth');
Route::resource('panier', 'PanierController')->middleware('auth');
/**
 * Route permettant de gerer la validation des vente
 */
Route::post('validation_vente','PanierController@validation_vente')->name('validation_vente')->middleware('auth');
/**
 * Route permettant de gerer les détails de la vente d'un client
 */
Route::get('/details_vente/{id}','PanierController@details_vente')->name('details_vente')->middleware('auth');
Route::get('/test','PanierController@test')->middleware('auth');

/**
 * Gestion des dépenses
 */
Route::resource('depense','DepenseController')->middleware('auth');
//route permettant d'afficher les dépenses par arrivage
Route::get('/depense/arrivage/{id}','DepenseController@depense_par_arrivage')->name('depense_par_arrivage')->middleware('auth');
/**
 * Route pour les commandes
 */
Route::resource('commande','CommandeController');
Route::get('/vente_voiture/client/{id}','VenteVoitureController@client_achat_voiture')->name('client_achat_voiture')->middleware('auth');
/**
 * Route permettant de valider les commandes
 */
Route::post('validation_commande','CommandeController@validation_commande')->name('validation_commande')->middleware('auth');
/**
 * Route permettant d'afficher le détails des achats du client
 */
Route::get('details_achats/client/{id}','CommandeController@details_achats_client')->name('details_achats_client')->middleware('auth');
Route::post('remboursement_dette','CommandeController@remboursement_dette')->name('remboursement_dette_client')->middleware('auth');
/**
 * Route permettant de gérer les clients
 */
Route::resource('client','ClientController')->middleware('auth');
/**
 * Route permettant de gérer la modification des informations des témoins
 */
Route::put('update_infos_temoins/{id}','CommandeController@update_infos_temoins')->name('update_infos_temoins')->middleware('auth');
/**
 * Resource permettant de gérer le paiement des clients
 */
Route::resource('paiement_client','PaiementClientController')->middleware('auth');
/**
 * Route permettant de gérer la comptabilité
 */
Route::get('/compta_generale','ComptabiliteController@generale')->name('compta_generale')->middleware('auth');

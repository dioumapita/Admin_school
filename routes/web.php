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

Route::view('/','pages/index')->name('index')->middleware('guest');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/liste_themes','ThemesController@all_themes')->name('liste_des_themes')->middleware('auth');
Route::get('/mon_profil','ProfilsController@mon_profil')->name('mon_profil')->middleware('auth');
Route::get('/change_password','ChangePasswordController@create')->name('form_change_password')->middleware('auth');
Route::post('/change_password','ChangePasswordController@store')->name('update_password')->middleware('auth');
Route::get('/etablissement','EtablissementController@infos_general')->name('etablissement_infos_general')->middleware('auth');
Route::get('/classes','ClassesController@all_classes')->name('liste_des_classes')->middleware('auth');
Route::get('/OutilsClasse','ClassesController@OutilsClasse')->name('print_excel_pdf_copy_classe')->middleware('auth');
Route::resource('annees','AnneeController')->middleware('auth');
Route::resource('niveaux','NiveauController')->middleware('auth');
//utiliser pour afficher les niveaux par année scolaire a supprimer
// Route::get('/annee/{id}/niveaux','NiveauController@niveau_par_annee')->name('niveau_par_annee')->middleware('auth');

Route::resource('eleve','EleveController')->middleware('auth');
//utiliser pour afficher les eleves par niveau de classe
Route::get('/eleve/{id}/niveau','EleveController@eleve_par_niveau')->name('eleve_par_niveau')->middleware('auth');
//afficher les élèves en mode grille
Route::get('/eleves_mode_grille','EleveController@eleve_mode_grille')->name('afficher_les_eleves_en_mode_grille')->middleware('auth');
//gestions des matières
Route::resource('matiere','MatiereController')->middleware('auth');
//utiliser pour afficher les matières par classe
Route::get('/matiere/{id}/classe','MatiereController@matiere_par_classe')->name('matiere_par_classe')->middleware('auth');
//utiliser pour les notes
Route::get('/note','NoteController@all_notes')->name('liste_des_notes')->middleware('auth');
//test
Route::get('/note/{id}/niveau','NoteController@note_par_niveau')->name('note_par_niveau');

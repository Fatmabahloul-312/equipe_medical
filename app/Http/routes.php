<?php
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\InfirmierController;
use App\Http\Controllers\AutreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/paramedical', function () {
    return view('paramedical.index');
})->name('paramedical.index');
Route::get('medecin/create','MedecinController@index')->name('medecin.create');
Route::post('medecin/create', 'MedecinController@store')->name('medecin.store');
Route::post('medecin/edit/{id}', 'MedecinController@edit')->name('medecin.edit');
Route::get('medecin/edit', 'MedecinController@index ')->name('medecin.store');
Route::get('medecin','MedecinController@show')->name('medecin.show');
Route::get('medecin/delete/{id}', 'MedecinController@destroy')->name('medecin.delete');
Route::post('medecin/update', 'MedecinController@update')->name('medecin.update');
Route::get('/search', 'MedecinController@search' )->name('medecin.search');


Route::get('infirmier/create','InfirmierController@index')->name('infirmier.create');
Route::post('infirmier/create', 'InfirmierController@store')->name('infirmier.store');
Route::post('infirmier/edit/{id}', 'InfirmierController@edit')->name('infirmier.edit');
Route::get('infirmier/edit', 'InfirmierController@index ')->name('infirmier.store');
Route::get('infirmier','InfirmierController@show')->name('infirmier.show');
Route::get('infirmier/delete/{id}', 'InfirmierController@destroy')->name('infirmier.delete');
Route::post('infirmier/update', 'InfirmierController@update')->name('infirmier.update');



Route::get('masseur/create','MasseurController@index')->name('masseur.create');
Route::post('masseur/create', 'MasseurController@store')->name('masseur.store');
Route::post('masseur/edit/{id}', 'MasseurController@edit')->name('masseur.edit');
Route::get('masseur/edit', 'MasseurController@index ')->name('masseur.store');
Route::get('masseur','MasseurController@show')->name('masseur.show');
Route::get('masseur/delete/{id}', 'MasseurController@destroy')->name('masseur.delete');
Route::post('masseur/update', 'MasseurController@update')->name('masseur.update');



Route::get('ouvrier/create','OuvrierController@index')->name('ouvrier.create');
Route::post('ouvrier/create', 'OuvrierController@store')->name('ouvrier.store');
Route::post('ouvrier/edit/{id}', 'OuvrierController@edit')->name('ouvrier.edit');
Route::get('ouvrier/edit', 'OuvrierController@index ')->name('ouvrier.store');
Route::get('ouvrier','OuvrierController@show')->name('ouvrier.show');
Route::get('ouvrier/delete/{id}', 'OuvrierController@destroy')->name('ouvrier.delete');
Route::post('ouvrier/update', 'OuvrierController@update')->name('ouvrier.update');



Route::get('sage/create','SageController@index')->name('sage.create');
Route::post('sage/create', 'SageController@store')->name('sage.store');
Route::post('sage/edit/{id}', 'SageController@edit')->name('sage.edit');
Route::get('sage/edit', 'SageController@index ')->name('sage.store');
Route::get('sage','SageController@show')->name('sage.show');
Route::get('sage/delete/{id}', 'SageController@destroy')->name('sage.delete');
Route::post('sage/update', 'SageController@update')->name('sage.update');




Route::get('surveillant/create','SurveillantController@index')->name('surveillant.create');
Route::post('surveillant/create', 'SurveillantController@store')->name('surveillant.store');
Route::post('surveillant/edit/{id}', 'SurveillantController@edit')->name('surveillant.edit');
Route::get('surveillant/edit', 'SurveillantController@index ')->name('surveillant.store');
Route::get('surveillant','SurveillantController@show')->name('surveillant.show');
Route::get('surveillant/delete/{id}', 'SurveillantController@destroy')->name('surveillant.delete');
Route::post('surveillant/update', 'SurveillantController@update')->name('surveillant.update');




Route::get('preparatrice/create','PreparatriceController@index')->name('preparatrice.create');
Route::post('preparatrice/create', 'PreparatriceController@store')->name('preparatrice.store');
Route::post('preparatrice/edit/{id}', 'PreparatriceController@edit')->name('preparatrice.edit');
Route::get('preparatrice/edit', 'PreparatriceController@index ')->name('preparatrice.store');
Route::get('preparatrice','PreparatriceController@show')->name('preparatrice.show');
Route::get('preparatrice/delete/{id}', 'PreparatriceController@destroy')->name('preparatrice.delete');
Route::post('preparatrice/update', 'PreparatriceController@update')->name('preparatrice.update');




Route::get('psychologue/create','PsychologueController@index')->name('psychologue.create');
Route::post('psychologue/create', 'PsychologueController@store')->name('psychologue.store');
Route::post('psychologue/edit/{id}', 'PsychologueController@edit')->name('psychologue.edit');
Route::get('psychologue/edit', 'PsychologueController@index ')->name('psychologue.store');
Route::get('psychologue','PsychologueController@show')->name('psychologue.show');
Route::get('psychologue/delete/{id}', 'PsychologueController@destroy')->name('psychologue.delete');
Route::post('psychologue/update', 'PsychologueController@update')->name('psychologue.update');










Route::resource('medecin','MedecinController');
Route::resource('infirmier','InfirmierController');
Route::resource('sage','SageController');
Route::resource('psychologue','PsychologueController');
Route::resource('masseur','MasseurController');
Route::resource('preparatrice','PreparatriceController');
Route::resource('ouvrier','OuvrierController');









//route for profile
Route::get('/profile', 'ProfileController@index' )->name('profile');
Route::put('/profile/update', 'ProfileController@update' )->name('profile.update');


// Routes for Users
Route::get('/users', 'UserController@index' )->name('users');
Route::post('/search', 'UserController@search' )->name('users.search');
Route::get('/user/create', 'UserController@create' )->name('user.create');  //->middleware('is_admin');
Route::post('/user/store', 'UserController@store' )->name('user.store');
Route::get('/user/delete/{id}', 'UserController@destroy' )->name('user.delete');























// Routes for Users
Route::get('/users', 'UserController@index' )->name('users');
Route::post('/search', 'UserController@search' )->name('users.search');
Route::get('/user/create', 'UserController@create' )->name('user.create');  //->middleware('is_admin');
Route::post('/user/store', 'UserController@store' )->name('user.store');
Route::get('/user/destroy/{id}', 'UserController@destroy' )->name('user.destroy');
Route::get('/user/admin/{id}', 'UserController@admin' )->name('user.admin');
Route::get('/user/not/admin/{id}', 'UserController@notAdmin' )->name('user.not.admin');




Route::auth();

Route::get('/home', 'HomeController@index');

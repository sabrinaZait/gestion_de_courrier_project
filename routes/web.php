<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StructureController;


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


Route::get('/',function(){
    return view('auth.login');
});

//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});
Route::resource("/structure", StructureController::class);

Route::get('/ajouter','App\Http\Controllers\ajoutController@ajout');
Route::get('/envoyer','App\Http\Controllers\ajoutController@envoie');
Route::get('/contacts','App\Http\Controllers\ajoutController@contacts');
Route::post('/envoyer','App\Http\Controllers\ajoutController@store');


require __DIR__.'/auth.php';

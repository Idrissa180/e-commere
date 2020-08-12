<?php

use Gloudemans\Shoppingcart\Facades\Cart;
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

Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/panier/ajouter', 'CartController@store')->name('cart.store');
Route::get('/videpanier', function(){
    Cart::destroy();
});

Route::delete('/panier/{roxId}', 'CartController@destroy')->name('cart.destroy');

Route::get('/panier','CartController@index')->name('cart.index');

Route::get('/product/{id}', 'CartController@affiche')->name('affiche.product');

Route::get('/paiement', 'PaiementController@index')->name('paiement.index');

Route::post('/newproduct', 'PostController@store')->name('new.post');
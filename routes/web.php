<?php

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
    return view('admin.index');
});

Route::resource('admin/sessions', 'AdminSessionsController', ['names'=>[
    'index' =>'admin.sessions.index',
    'create' =>'admin.sessions.create',
    'store' =>'admin.sessions.store',
    'edit' =>'admin.sessions.edit',
    'show' =>'admin.sessions.show',

]]);

Route::resource('admin/bookmethods', 'AdminBookMethodController', ['names'=>[
    'index' =>'admin.bookmethods.index',
    'create' =>'admin.bookmethods.create',
    'store' =>'admin.bookmethods.store',
    'edit' =>'admin.bookmethods.edit',

]]);

Route::resource('admin/games', 'AdminGamesController', ['names'=>[
    'index' =>'admin.games.index',
    'create' =>'admin.games.create',
    'store' =>'admin.games.store',
    'edit' =>'admin.games.edit',

]]);

Route::resource('admin/typegames', 'AdminTypeGamesController', ['names'=>[
    'index' =>'admin.typegames.index',
    'create' =>'admin.typegames.create',
    'store' =>'admin.typegames.store',
    'edit' =>'admin.typegames.edit',

]]);
Route::resource('admin/paymentmethods', 'AdminPaymentMethodController', ['names'=>[
    'index' =>'admin.paymentmethods.index',
    'create' =>'admin.paymentmethods.create',
    'store' =>'admin.paymentmethods.store',
    'edit' =>'admin.paymentmethods.edit',

]]);


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
    return view('welcome');
});

/*
Route::get('user/{id}/{name}', function ($id, $name) {
    return $id . $name;
})->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);

*/
/* Route::get('/contact/{name}','TestController@contact'); */

Route::get('/contact', 'ContactController@newContact');

Route::get('/listecontacts','ContactController@listContacts');
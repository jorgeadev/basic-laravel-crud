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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('many', 'ResourcesMethods');

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('hello', 'HelloController');

Route::get('user/{name}', 'User\UserController@user')->where('name', '[A-Za-z0-9]+');

Route::get('user1/{id}', 'User\UserController@user1')->where('id', '[0-9]+');

Route::get('user2/{id}/{name}', 'User\UserController@user2')->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);

Route::resource('many', 'ResourcesMethods');

Route::resource('many1', 'ResourcesMethods')->only(['index', 'show']);

Route::resource('many2', 'ResourcesMethods')->except(['create', 'destroy', 'store', 'update']);

Route::resource('many3', 'ResourcesMethods')->only(['index', 'show'])->names(['index' => 'many.index']);




Route::get('test', function () {
    return 'Test page';
})->name('testroute');

Route::get('redirecttest', function () {
    return redirect()->route('testroute');
});

Route::get('redirecttest1', function () {
    return redirect()->route('username', ['nombre' => 'Jorge Alberto']);
});

Route::redirect('test3', '/test', 301);*/

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('hola', function () {
    return 'Hola Jorge Alberto';
});

//Route::get('user/{name?}', 'UserController@userParameter')->name('username');
//
//Route::get('user/{name}/{comment}', 'UserController@userParameters');

Route::get('usuario/{nombre?}', function ($nombre = 'Invitado') {
    return "Usuario " . $nombre;
})->name('username');

Route::get('usuario/{nombre}/{comentario}', function ($nombre, $comentario) {
    return "Usuario " . $nombre . " y el comentario es: " . $comentario;
});

Route::get('user/{name}', function ($name) {
    return "Usuario " . $name;
})->where('name', '[A-Za-z0-9]+');


Route::get('user1/{id}', function ($id) {
    return "Usuario " . $id;
})->where('id', '[0-9]+');

Route::get('user2/{id}/{name}', function ($id, $name) {
    return "Usuario " . $id . ' y el nombre es: ' . $name;
})->where([
    'id' => '[0-9]+',
    'name' => '[A-Za-z]+'
]);

Route::get('test', function () {
    return 'Test page';
})->name('testroute');

Route::get('redirecttest', function () {
    return redirect()->route('testroute');
});

Route::get('redirecttest1', function () {
    return redirect()->route('username', ['nombre' => 'Jorge Alberto']);
});

Route::redirect('test3', '/test', 301);*/

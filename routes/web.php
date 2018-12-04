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

Route::resource('users', 'UsersController',[ 
	'names' => [
		'index' => 'users.inicio',
		'create'=> 'users.criar',
		'store' => 'users.salvar',
		'show' => 'users.mostrar',
		'update'=> 'users.atualizar',
		'destroy'=> 'users.remover',
		'edit' => 'users.editar'
	]
]); 


Route::group(['middleware' => ['auth', 'check.admin']], function() {
    // Precisa estar autenticado e ser usuário do tipo administrador para conseguir acessar 🙂
	Route::resource('disciplina', 'DisciplinaController',[
	'names'=>[
		'index' => 'disciplina', 
		'store' => 'disciplina.salvar', 
		'show' => 'disciplina.mostrar', 
		'{id}/edit' => 'disciplina.editar', 
		'{id}/update' => 'disciplina.atualizar',  
		'destroy' => 'disciplina.remover' 
	]
	]); 
});

Route::group(['middleware' => ['auth']], function() {
    // Precisa estar autenticado para acessar 🙂
 	Route::resource('postagem', 'PostagemController',[ 
	'names' => [
		'index' => 'postagem.inicio',
		'create'=> 'postagem.criar',
		'store' => 'postagem.salvar',
		'/{id}/update'=> 'postagem.atualizar',
		'destroy'=> 'postagem.remover'
	]
	]); 

	Route::get('/inicial', 'SiteController@inicial')->name('inicial');
	Route::post('/postagem/mostrar', 'PostagemController@show')->name('postagem.mostrar');
	Route::post('/postagem/{id}/editar', 'PostagemController@edit')->name('postagem.editar'); 
});

Route::get('/', 'SiteController@index')->name('index');
Route::get('/login', 'SiteController@login')->name('login');
Route::post('/autenticar', 'LoginController@autenticar')->name('autenticar');
Route::get('/logout', 'LoginController@logout')->name('logout');

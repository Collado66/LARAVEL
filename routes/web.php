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

//Route::get('/', function () {
    // return view('welcome');
    // });


 //SLIDE 21
 //CRIANDO ROTAS
//Route::get('/', function () {
//      return 'AULA DE PW III';
//});


//SLIDE 21 
//CRIANDO ROTAS
//COMENTA O ROUTE ACIMA
//Route::get('/quemsomos', function () {
    // return view('welcome');
   //  return 'Quem somos';
 //});

// Route::get('/contato', function () {
    // return view('welcome');
  //   return 'contato';
 //});


 //SLIDE 27 
//DEPOIS DE CRIAR O CONTROLLER PRINCIPAL 
//COMENTA O ROUTE ACIMA
Route::get('/', 'App\Http\Controllers\PrincipalController@principal');
Route::get('/sobrenos', 'App\Http\Controllers\SobreNosController@principal');
Route::get('/contato', 'App\Http\Controllers\ContatoController@principal');

//
//        Route::get('/dashboard', function () {
//            return view('dashboard');
//      })->middleware(['auth'])->name('dashboard');

//        require __DIR__.'/auth.php';

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

Route::get('/', function () {
  $nome = 'Alex';
  $idade = 23;
  $arr = [1,2,3,4,5];
  $nomes = ['matheus', 'samira', 'joão', 'ruben'];

    return view('welcome', ['nome' => $nome,
                                           'idade' => $idade,
                                              'arr' => $arr,
                                              'nomes' => $nomes
                                        ]);
});

Route::get('/products', function () {
    return view('products');
});


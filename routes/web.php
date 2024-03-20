<?php

use App\Http\Controllers\UserController; 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/usuario/{name}/{lastname?}', [UserController::class,'usuario']); 

Route::get('/conta/{operacao}/{num1}/{num2}', [UserController::class,'contas']); 

Route::get('/produtos', [UserController::class,'listaProdutos']); 

Route::get('/aluno/{nome}/{sobrenome}/{idade}/{rm}/{genero}/{endereco}', [UserController::class,'aluno']);

Route::get('/', function () { 

    return view('welcome'); 

}); 
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('teste', function() {
    return "hello world";
});

route::prefix('aluno')->group(function(){
    route::get('listar', ["App\Http\Controller\AlunoController", 'listar']);
    route::get('adicionar', ['App\Http\Controller\AlunoController', 'adcionar']);
    route::get('remover',['App\Http\Controller\AlunoController', 'remove']);
    route::get('atualizar', ['App\Http\Controller\AlunoController', 'update']);
});

route::prefix('aluno')->group(function(){
    route::get('listar',  ['App\Http\Controller\ProfessorController', 'listar']);
    route::get('adicionar', ['App\Http\Controller\ProfessorController', 'adcionar']);
    route::get('remover', ['App\Http\Controller\ProfessorController', 'remove']);
    route::get('atualizar', ['App\Http\Controller\ProfessorController', 'update']);
});
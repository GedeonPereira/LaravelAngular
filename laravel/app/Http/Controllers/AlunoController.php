<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    function listar(){
            return response()->json([
                ["nome"=>"ana", "rm"=>"123"],
                ["nome"=>"jose", "rm"=>"456"],
                ["nome"=>"maria", "rm"=>"789"],
                ["nome"=>"joana", "rm"=>"135"],
                []
            ]);
    }
    function adcionar(){}
    function remove(){}
    function update(){}
}


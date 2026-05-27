<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    function listar() {
        return response()-> json([
            ["nome"=>"ovideo","email"=>"foguinholinux@hotmail.com", "cpf"=>"12345678910"],
            ["nome"=>"brunao","email"=>"hocksalvatodos@hotmail.com", "cpf"=>"10987654321"],
            ["nome"=>"Deison","email"=>"saborhetero@hotmail.com", "cpf"=>"69246924692"]
        ]);
    }
    function adcionar(){}
    function remove(){}
    function update(){}
}

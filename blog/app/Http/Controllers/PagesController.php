<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('Welcome');
    }
    public function amigos(){
        $amigos = [
            ['nome'=> 'Bolsonaro','idade' => 45],
            ['nome'=> 'Marina','idade' => 95],
            ['nome'=> 'Lula','idade' => 300],
        ];
        return $amigos;
    }
    public function sobre(){
        $eu = [
            'nome' => 'Wendell Adriel',
            'idade' => 23
        ];
        return view('sobre', compact('eu'));
    }
}

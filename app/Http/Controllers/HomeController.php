<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $data = [
            'testo'=> 'Ciao Alessio'
        ];
        return view('home', $data);
    }

    public function contatti(){
        return view('contatti_page');
    }
}

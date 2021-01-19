<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
    public function index(){

        $all_dresses = Dress::all();

        $data = [
            'testo'=> 'Ciao Alessio',
            'all_dresses_data'=> $all_dresses
        ];
        return view('home', $data);
    }

    public function contatti(){
        return view('contatti_page');
    }
}

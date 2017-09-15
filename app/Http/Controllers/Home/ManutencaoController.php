<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManutencaoController extends Controller
{
    public function manutencao (){
        return view('home.manutencao');
    }
}

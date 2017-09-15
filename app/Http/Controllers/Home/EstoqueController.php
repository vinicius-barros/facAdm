<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstoqueController extends Controller
{
    public function estoque (){
        return view('home.estoque');
    }
}

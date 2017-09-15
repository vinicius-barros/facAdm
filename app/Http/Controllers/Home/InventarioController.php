<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InventarioController extends Controller
{
    public function inventario (){
        return view('home.inventario');
    }
}

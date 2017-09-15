<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OpController extends Controller
{
    public function op (){
        return view('home.op');
    }
}

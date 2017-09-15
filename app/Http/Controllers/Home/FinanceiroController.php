<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FinanceiroController extends Controller
{
    public function financeiro(){
        return view('home.financeiro');
    }
}

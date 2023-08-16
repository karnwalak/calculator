<?php

namespace Karnwalak\Calculator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    public function add(){
        $a=6;
        $b=7;
        $result = $a + $b;
        return view('calculator::add', compact('result'));
    }
    
    public function subtract(){
        $a=5;
        $b=4;
        $result = $a - $b;
        return view('calculator::add', compact('result'));
    }
}

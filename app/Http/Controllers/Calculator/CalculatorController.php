<?php

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CalculatorController extends Controller
{
    public function index():View
    {
        return view('calculator.Calculator_form'); 
    }

    public function result():View
    {
        $a = request()->get('a');
        $b = request()->get('b');
        $opr = request()->get('opr');

         if($opr=='add')
            $result = $a+$b;
        else if($opr=='multiply')
            $result = $a*$b;
        else if($opr =='subtract')
            $result = $a-$b;
        else
            $result = "Operation not defined";

        return view('calculator.Calculator_result')
                ->with('a',$a)
                ->with('b',$b)
                ->with('opr',$opr)
                ->with('result',$result); 
    }
}

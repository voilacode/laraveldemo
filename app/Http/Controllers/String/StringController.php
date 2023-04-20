<?php

namespace App\Http\Controllers\String;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StringController extends Controller
{
    
    public function index(){
       return view('String.form');
    }

    public function result(){
        $message = request()->get('message');
        $length = strlen($message);
       return view('String.result')
                ->with('length',$length)
                ->with('message',$message);
    }
}

<?php

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function index(){
        return view('calculator.operation.index');
    }

     public function create(){
        return view('calculator.operation.create');
    }

     public function store(){
        // logic to save   
        echo "we are in store method"; 
    }

     public function show(){
        return view('calculator.operation.show');
    }

     public function edit(){
        return view('calculator.operation.edit');
    }

     public function update(){
        // update the data 
        echo "we are in update method";
    }

     public function destroy(){
        // delete the data
        echo "we are in delete method";
    }
}

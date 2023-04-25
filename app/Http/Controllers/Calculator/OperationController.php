<?php

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use App\Models\Operation;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function index(){

        // business logic
        //Eloquent Model 

        // // 1. pull first record
        // $data = Operation::first();
        // OperationController::printdata($data);


        //  // 2. pull record based on id using find method
        // $data = Operation::find(5);
        // OperationController::printdata($data);

        // // 3. pull all data
        // $all_data = Operation::all();
        // echo "--- printing all records ---";
        // foreach($all_data as $data){
        //     OperationController::printdata($data);
        // }

        // all data
        //$all_data = Operation::all();

        // 4. pull data based on contraints
        $all_data = Operation::where('a','>',30)
                        ->where('b','<',50)
                        ->orderBy('id','desc')
                        ->get();

        return view('calculator.operation.index')->with('all_data',$all_data);
    }

    public static function printdata($data){
        echo "<br>";
        echo "a - ".$data->a. "<br>";
        echo "b - ".$data->b. "<br>";
        echo "opr - ".$data->opr. "<br>";
        echo "result - ".$data->result. "<br>";
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

<?php

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use App\Models\Operation;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function index()
    {
        $all_data = Operation::orderBy('id', 'desc')->get();
        return view('calculator.operation.index')->with('all_data', $all_data);
    }

    public function create()
    {
        return view('calculator.operation.create');
    }

    public function store()
    {
        $data = request()->all();
        if ($data['operation'] == 'add')
            $result = $data['a'] + $data['b'];
        else if ($data['operation'] == 'subtract')
            $result = $data['a'] - $data['b'];
        else if ($data['operation'] == 'multiply')
            $result = $data['a'] * $data['b'];

        //store the data into database
        $oprModel = new Operation();
        $oprModel->a = $data['a'];
        $oprModel->b = $data['b'];
        $oprModel->opr = $data['operation'];
        $oprModel->result = $result;
        $oprModel->save();

        return redirect()->route('operation.index');
    }

    public function show()
    {
        return view('calculator.operation.show');
    }

    public function edit()
    {
        return view('calculator.operation.edit');
    }

    public function update()
    {
        // update the data 
        echo "we are in update method";
    }

    public function destroy()
    {
        // delete the data
        echo "we are in delete method";
    }
}

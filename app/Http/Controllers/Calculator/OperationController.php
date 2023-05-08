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
        //business logic
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

    public function show($id)
    {
        $data = Operation::where('id', $id)->first();
        return view('calculator.operation.show')->with('data', $data);
    }

    public function edit($id)
    {
        // load the data from database based on id
        $data = Operation::where('id', $id)->first();
        // show one form to edit the data
        return view('calculator.operation.edit')->with('data', $data);
    }

    public function update($id)
    {
        //pull the data form request
        $data = request()->all();
        $opr = Operation::where('id', $id)->first();
        $opr->a = $data['a'];
        $opr->b = $data['b'];
        $opr->opr = $data['operation'];

        //business logic
        if ($data['operation'] == 'add')
            $result = $data['a'] + $data['b'];
        else if ($data['operation'] == 'subtract')
            $result = $data['a'] - $data['b'];
        else if ($data['operation'] == 'multiply')
            $result = $data['a'] * $data['b'];

        $opr->result = $result;
        $opr->update();

        // update the data 
        return redirect()->route('operation.index');
    }

    public function destroy($id)
    {
        $data = Operation::where('id', $id)->first();
        $data->delete();
        // delete the data
        echo "Successfully deleted the id : " . $id;
        echo "<a href='http://localhost/operation'>back to index page</a>";
    }
}

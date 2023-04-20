<?php

namespace App\Http\Controllers\CodeClear;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CodeClearController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('CodeClear.index');
    }

    /**
     * Display a listing of the resource.
     */
    public function recent()
    {
        return view('CodeClear.recent');
    }

    /**
     * Display a listing of the resource.
     */
    public function page($slug)
    {
        if($slug=='terms')
            return view('CodeClear.pages.terms');
        else if($slug=='privacy')
            return view('CodeClear.pages.privacy');
        else if($slug=='contact')
            return view('CodeClear.pages.contact');
        else
            abort('403','Opps! we dint create this page');
    }

   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

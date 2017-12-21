<?php

namespace App\Http\Controllers;

use App\Cases;
use Illuminate\Http\Request;

class CaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('case.index',[
          'data' => Cases::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('case.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cases::create($request->all());
        return redirect(route('case.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cases  $Cases
     * @return \Illuminate\Http\Response
     */
    public function show(Cases $Cases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cases  $Cases
     * @return \Illuminate\Http\Response
     */
    public function edit(Cases $case)
    {
        return view('case.edit',[
          'data' => $case
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cases  $Cases
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cases $case)
    {
        $case->update($request->all());
        return redirect(route('case.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cases  $Cases
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cases $case)
    {
        $case->delete();
        return redirect(route('case.index'));
    }
}

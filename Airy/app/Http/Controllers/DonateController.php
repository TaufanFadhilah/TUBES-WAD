<?php

namespace Airy\Http\Controllers;

use Airy\Donate;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('donate.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \Airy\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function show(Donate $donate)
    {
        return view('donate.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Airy\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function edit(Donate $donate)
    {
        return view('donate.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Airy\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donate $donate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Airy\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donate $donate)
    {
        //
    }
}

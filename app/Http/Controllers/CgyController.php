<?php

namespace App\Http\Controllers;

use App\Cgy;
use Illuminate\Http\Request;

class CgyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Cgy  $cgy
     * @return \Illuminate\Http\Response
     */
    public function show(Cgy $cgy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cgy  $cgy
     * @return \Illuminate\Http\Response
     */
    public function edit(Cgy $cgy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cgy  $cgy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cgy $cgy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cgy  $cgy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cgy $cgy)
    {
        //
    }

    public function showItems(Cgy $cgy)
    {
        return $cgy->items;
    }
}

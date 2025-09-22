<?php

namespace App\Http\Controllers;

use App\Models\FotoGadai;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFotoGadaiRequest;
use App\Http\Requests\UpdateFotoGadaiRequest;

class FotoGadaiController extends Controller
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
     * @param  \App\Http\Requests\StoreFotoGadaiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFotoGadaiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FotoGadai  $fotoGadai
     * @return \Illuminate\Http\Response
     */
    public function show(FotoGadai $fotoGadai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FotoGadai  $fotoGadai
     * @return \Illuminate\Http\Response
     */
    public function edit(FotoGadai $fotoGadai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFotoGadaiRequest  $request
     * @param  \App\Models\FotoGadai  $fotoGadai
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFotoGadaiRequest $request, FotoGadai $fotoGadai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FotoGadai  $fotoGadai
     * @return \Illuminate\Http\Response
     */
    public function destroy(FotoGadai $fotoGadai)
    {
        //
    }
}

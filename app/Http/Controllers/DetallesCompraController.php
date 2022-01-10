<?php

namespace App\Http\Controllers;

use App\Models\DetallesCompra;
use App\Http\Requests\StoreDetallesCompraRequest;
use App\Http\Requests\UpdateDetallesCompraRequest;

class DetallesCompraController extends Controller
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
     * @param  \App\Http\Requests\StoreDetallesCompraRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetallesCompraRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetallesCompra  $detallesCompra
     * @return \Illuminate\Http\Response
     */
    public function show(DetallesCompra $detallesCompra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetallesCompra  $detallesCompra
     * @return \Illuminate\Http\Response
     */
    public function edit(DetallesCompra $detallesCompra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetallesCompraRequest  $request
     * @param  \App\Models\DetallesCompra  $detallesCompra
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetallesCompraRequest $request, DetallesCompra $detallesCompra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetallesCompra  $detallesCompra
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetallesCompra $detallesCompra)
    {
        //
    }
}

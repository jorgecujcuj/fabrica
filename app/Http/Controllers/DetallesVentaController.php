<?php

namespace App\Http\Controllers;

use App\Models\DetallesVenta;
use App\Http\Requests\StoreDetallesVentaRequest;
use App\Http\Requests\UpdateDetallesVentaRequest;

class DetallesVentaController extends Controller
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
     * @param  \App\Http\Requests\StoreDetallesVentaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetallesVentaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetallesVenta  $detallesVenta
     * @return \Illuminate\Http\Response
     */
    public function show(DetallesVenta $detallesVenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetallesVenta  $detallesVenta
     * @return \Illuminate\Http\Response
     */
    public function edit(DetallesVenta $detallesVenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetallesVentaRequest  $request
     * @param  \App\Models\DetallesVenta  $detallesVenta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetallesVentaRequest $request, DetallesVenta $detallesVenta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetallesVenta  $detallesVenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetallesVenta $detallesVenta)
    {
        //
    }
}

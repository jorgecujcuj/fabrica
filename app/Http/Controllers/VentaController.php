<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Cliente;
use App\Http\Requests\Venta\StoreVentaRequest;
use App\Http\Requests\Venta\UpdateVentaRequest;

class VentaController extends Controller
{
   
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Venta::get();

        return view('admin.venta.index', compact('compras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::get();
        return view('admin.venta.create', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompraRequest $request)
    {
        $venta = Venta::create($request->all());

        foreach($request->idproducto as $key => $product){
            $resultado[] = array("idproducto"=>$request->idproducto[$key],
            "cantidad"=>$request->cantidad[$key],
            "precio"=>$request->precio[$key],
            "descuento"=>$request->descuento[$key]);
        }
        $venta->detallesventa()->createMany($resultado);

        return redirect()->route('compras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        return view('admin.venta.show', compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta)
    {
        $clientes = Cliente::get();
        return view('admin.venta.update', compact('venta','clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompraRequest $request, Venta $venta)
    {
        // $venta->update($request->all());
        // return redirect()->route('compras.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        // $venta->delete();
        // return redirect()->route('compras.index');
    }

}

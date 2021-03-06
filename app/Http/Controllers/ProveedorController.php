<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;

use App\Http\Requests\Proveedor\ProveedorCreateRequest;
use App\Http\Requests\Proveedor\ProveedorEditRequest;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::get();

        return view('admin.proveedor.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.proveedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ProveedorCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProveedorCreateRequest $request)
    {
        Proveedor::create($request->all());
        return redirect()->route('proveedores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedor $proveedor)
    {
        return view('admin.proveedor.show', compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Proveedor $proveedor)
    {
        return view('admin.proveedor.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\ProveedorEditRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProveedorEditRequest $request, Proveedor $proveedor)
    {
        $data = $request->only('nombre','email','dpi','direccion','telefono');

        $proveedor->update($data);
        //$proveedor->update($request->all());
        return redirect()->route('proveedores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->route('proveedores.index');
    }
}

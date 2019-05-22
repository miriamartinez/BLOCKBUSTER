<?php

namespace App\Http\Controllers;

use App\VentasM;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ventas=VentasM::all();
        return view("Ventas.index",compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ventas=VentasM::all();
        return view("ventas.create",compact('ventas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        VentasM::create($request->all());
        return redirect("ventas");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VentasM  $ventasM
     * @return \Illuminate\Http\Response
     */
    public function show(VentasM $ventasM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VentasM  $ventasM
     * @return \Illuminate\Http\Response
     */
    public function edit(VentasM $venta)
    {
        //

        return view("ventas.edit",compact('venta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VentasM  $ventasM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VentasM $venta)
    {
        $venta->update($request->all());
        return redirect("ventas");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VentasM  $ventasM
     * @return \Illuminate\Http\Response
     */
    public function destroy(VentasM $venta)
    {
        $venta->delete();
        return redirect("ventas");
    }
}

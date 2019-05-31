<?php

namespace App\Http\Controllers;

use App\Stands;
use Illuminate\Http\Request;

class StandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stands=Stands::all();
        return view("Stands.index",compact('stands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("Stands.create");
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
        $stand=array(
            "descripcion_s"=>$request->descripcion_s,
        );
        Stands::create($stand);
        return redirect("stands");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stands  $stands
     * @return \Illuminate\Http\Response
     */
    public function show(Stands $stands)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stands  $stands
     * @return \Illuminate\Http\Response
     */
    public function edit(Stands $stand)
    {
        return view("stands.edit",compact('stand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stands  $stands
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stands $stand)
    {
        $stand->update($request->all());
        return redirect("stands");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stands  $stands
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stands $stand)
    {
        //
        $stand->delete();
        return redirect("stands");
    }
}

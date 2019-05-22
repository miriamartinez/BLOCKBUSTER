<?php

namespace App\Http\Controllers;

use App\Tickets;
use App\Clientes;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tickets=Tickets::all();
        return view("Tickets.index",compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $clientes=Clientes::all();
        return view("Tickets.create",compact('clientes'));

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
        Tickets::create($request->all());
        return redirect("tickets");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function show(Tickets $tickets)
    {
        //


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function edit(Tickets $ticket)
    {
        //
        $clientes=Clientes::all();
        return view("Tickets.edit",compact('ticket','clientes'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tickets $ticket)
    {
        //
        $ticket->update($request->all());
        return redirect("tickets");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tickets $ticket)
    {
        //
        $ticket->delete();
        return redirect("tickets");
    }
}

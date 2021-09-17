<?php

namespace App\Http\Controllers;

use App\Models\Organismo;
use Illuminate\Http\Request;

class OrganismoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organismos = Organismo::all();

        return response()->json($organismos);
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
        $organismo = Organismo::create($request->post());

        return response()->json([
            'organismo' => $organismo
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organismo  $organismo
     * @return \Illuminate\Http\Response
     */
    public function show(Organismo $organismo)
    {
        return response()->json($organismo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organismo  $organismo
     * @return \Illuminate\Http\Response
     */
    public function edit(Organismo $organismo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organismo  $organismo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organismo $organismo)
    {
        $organismo->fill($request->post())->save();
        return response()->json([
            'organismo' => $organismo
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organismo  $organismo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organismo $organismo)
    {
        $organismo->delete();
        return response()->json();
    }
}

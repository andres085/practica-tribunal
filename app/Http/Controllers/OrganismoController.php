<?php

namespace App\Http\Controllers;

use App\Models\Organismo;
use Illuminate\Http\Request;
use App\Http\Requests\OrganismoStoreRequest;

class OrganismoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organismos = Organismo::with('documentos')->get()->all();

        return response()->json($organismos);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrganismoStoreRequest $request)
    {
        $organismo = Organismo::create($request->validated());

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

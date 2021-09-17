<?php

namespace App\Http\Controllers;

use App\Models\DocumentoObservacion;
use Illuminate\Http\Request;

class DocumentoObservacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentoObservaciones = DocumentoObservacion::all();

        return response()->json($documentoObservaciones);
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
        $documentoObservacion = DocumentoObservacion::create($request->post());

        return response()->json([
            'documentoObservacion'=>$documentoObservacion
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DocumentoObservacion  $documentoObservacion
     * @return \Illuminate\Http\Response
     */
    public function show(DocumentoObservacion $documentoObservacion)
    {
        return response()->json($documentoObservacion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DocumentoObservacion  $documentoObservacion
     * @return \Illuminate\Http\Response
     */
    public function edit(DocumentoObservacion $documentoObservacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DocumentoObservacion  $documentoObservacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DocumentoObservacion $documentoObservacion)
    {
        $documentoObservacion->fill($request->post())->save();
        return response()->json([
            'documentoObservacion' => $documentoObservacion
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DocumentoObservacion  $documentoObservacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(DocumentoObservacion $documentoObservacion)
    {
        $documentoObservacion->delete();
        return response()->json();
    }
}

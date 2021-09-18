<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentoTipo;
use App\Http\Requests\DocumentoTipoStoreRequest;

class DocumentoTipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentoTipos = DocumentoTipo::all();

        return response()->json($documentoTipos);

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
    public function store(DocumentoTipoStoreRequest $request)
    {
        $documentoTipo = DocumentoTipo::create($request->validated());

        return response()->json([
            'documentoTipo'=>$documentoTipo
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DocumentoTipo  $documentoTipo
     * @return \Illuminate\Http\Response
     */
    public function show(DocumentoTipo $documentoTipo)
    {
        return response()->json($documentoTipo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DocumentoTipo  $documentoTipo
     * @return \Illuminate\Http\Response
     */
    public function edit(DocumentoTipo $documentoTipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DocumentoTipo  $documentoTipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DocumentoTipo $documentoTipo)
    {
        $documentoTipo->fill($request->post())->save();
        return response()->json([
            'documentoTipo' => $documentoTipo
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DocumentoTipo  $documentoTipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(DocumentoTipo $documentoTipo)
    {
        $documentoTipo->delete();
        return response()->json();
    }
}

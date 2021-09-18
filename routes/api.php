<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\OrganismoController;
use App\Http\Controllers\ExpedienteController;
use App\Http\Controllers\DocumentoTipoController;
use App\Http\Controllers\DocumentoObservacionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('expediente', ExpedienteController::class);
Route::resource('organismo', OrganismoController::class);
Route::resource('area', AreaController::class);
Route::resource('documento-tipo', DocumentoTipoController::class);
Route::resource('documento-observacion', DocumentoObservacionController::class)->parameters(['documento_observacion' => 'documento_observaciones']);
Route::resource('documento', DocumentoController::class);
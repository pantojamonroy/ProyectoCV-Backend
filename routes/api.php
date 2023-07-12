<?php

//use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClienteController;

/* creo falta ContacController */



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::post("/clienteC",[ClienteController::class,'create']);
Route::get("/clienteR",[ClienteController::class,'read']);
Route::put("/clienteU",[ClienteController::class,'update']);
Route::delete("/clienteD",[ClienteController::class,'delete']);

//API Formulario//

//Route::get("clienteR", [ClienteController::class,'read']);

Route::get('/lectura', [ClienteController::class,'read']);
Route::post('/creacion', [ClienteController::class,'create']);
Route::put('/actualizar', [ClienteController::class,'update']);



//Contact Form//

/* Route::post('/contact', [ContactController::class, 'enviarMensaje']); */

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request){
    return $request->user();
});*/ 
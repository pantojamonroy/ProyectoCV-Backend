<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Cliente;


class ClienteController extends Controller
{
    public function read(Request $request){
        $user = new Cliente();

        if($request->query("id")){
            $cliente = $user->find($request->query("id"));
        } else{
            $cliente = $user->all();
        }

        return  response()->json($cliente,200);
    }

    //$cliente = clienteFront::createImageBitmap($request->all());

    public function create(Request $request){

        $cliente = new Cliente();

        $cliente->name = $request->input("name");
        $cliente->lastname = $request->input("lastname");
        $cliente->phone = $request->input("phone");
        $cliente->email = $request->input("email");
        $cliente->city = $request->input("city");
        $cliente->message = $request->input("message");

        $cliente->save();

        $message=["message" => "Resgistro Exitoso!!"];

        return response()->json($message,Response::HTTP_CREATED);
        
        // return response()->json($message,Response::201);
    }


    
    public function update(Request $request){


        $idCliente = $request->query("id");

        $cliente = new Cliente();

        $clienteParticular = $cliente->find($idCliente);

        $cliente->name = $request->input("name");
        $cliente->lastname = $request->input("lastname");
        $cliente->phone = $request->input("phone");
        $cliente->email = $request->input("email");
        $cliente->city = $request->input("city");
        $cliente->message = $request->input("message");


        $cliente->save();

        $message=[
            "message" => "Actualización Exitosa!!",
            "idCliente" => $request->query("id"),
            "nameCliente"=>$cliente->name
        ];

        return $message;
    }

        

    public function delete(Request $request){

        $idCliente = $request->query("id");

        $cliente = new Cliente();

        $cliente = $cliente->find($idCliente);

        $cliente->delete();

        $message=[
            "message" => "Eliminación Exitosa!!",
            "idCliente" => $request->query("id"),
        ];

        return $message;
    }


}

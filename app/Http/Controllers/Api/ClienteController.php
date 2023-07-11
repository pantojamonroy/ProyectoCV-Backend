<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Cliente;


class ClienteController extends Controller
{
    public function read(Request $request){

        $clientes = new Cliente();

        $data = $clientes->all();        

        return  response()->json($data,200);
    }

    public function create(Request $request){

        $cliente = new Cliente();

        $cliente->name = $request->input("name");
        $cliente->lastname = $request->input("lastname");
        $cliente->phone = $request->input("phone");
        $cliente->email = $request->input("email");
        $cliente->city = $request->input("city");

        $cliente->save();

        $message=["message" => "Resgistro Exitoso!!"];

        return response()->json($message,Response::HTTP_CREATED);
        
        // return response()->json($message,Response::201);
    }


    
    public function update(Request $request){


        $idCliente = $request->query("id");

        $cliente = new Cliente();

        $clienteParticular = $cliente->find($idCliente);

        $clienteParticular->name = $request->input("name");
        $clienteParticular->isbn = $request->input("isbn");
        $clienteParticular->author = $request->input("author");
        $clienteParticular->edition = $request->input("edition");


        $clienteParticular->save();

        $message=[
            "message" => "Actualización Exitosa!!",
            "idCliente" => $request->query("id"),
            "nameCliente"=>$clienteParticular->name
        ];

        return $message;
    }

        

    public function delete(Request $request){

        $idCliente = $request->query("id");

        $cliente = new Cliente();

        $clienteParticular = $cliente->find($idCliente);

        $clienteParticular->delete();

        $message=[
            "message" => "Eliminación Exitosa!!",
            "idCliente" => $request->query("id"),
        ];

        return $message;
    }


}

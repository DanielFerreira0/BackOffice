<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function clientes(){
        return Cliente::all();
    }

    public function getCliente($id){
        $cliente = Cliente::find($id);
        return $cliente;
    }

    public function add(Request $request){

        try{
            $cliente = new Cliente;

            $cliente = new Cliente;
            $cliente->nome = $request->name_app;
            $cliente->telefone = $request->phone_app;
            $cliente->idade = $request->age_app;
            $cliente->email = $request->email_app;

            $cliente->save();
            
            return ['insert' => 'ok'];

        }catch(\Exception $erro){
            return ['insert' => 'error'];
        }
    }

    public function edit(Request $request, $id){
        try{
            $cliente =  Cliente::find($id);

            $cliente->nome = $request->name_app;
            $cliente->telefone = $request->phone_app;
            $cliente->idade = $request->age_app;
            $cliente->email = $request->email_app;

            $cliente->save();
            
            return ['update' => 'ok'];

        }catch(\Exception $erro){
            return ['update' => 'error'];
        }
    }

    public function delete($id){
        try{
            $cliente = Cliente::find($id);
            $cliente->delete();

            return ['delete' => 'ok'];

        }catch(\Exception $erro){
            return ['delete' => 'error'];

        }

    }

}
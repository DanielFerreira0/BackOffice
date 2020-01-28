<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function index(){
        $cliente = Cliente::all();
        //dd($cliente);
        $array_clientes = array('clientes'=>$cliente);

        return view('home', $array_clientes);
    }

    public function profile(){
        return view("profile");
    }

    public function edit($id){
        $cliente = Cliente::find($id);
        //dd($cliente);

        return view ("edit", $cliente);
    }

    public function new(){
        return view('new');
    }

    public function add(Request $request){
        //dd($request->all());
        $cliente = new Cliente;
        $cliente->nome = $request->name_form;
        $cliente->telefone = $request->phone_form;
        $cliente->idade = $request->age_form;
        $cliente->email = $request->email_form;

        $cliente->save();

        return back();
    }

    public function update(Request $request){
        $cliente = Cliente::find($request->id_form);

        $cliente->nome = $request->name_form;
        $cliente->telefone = $request->phone_form;
        $cliente->idade = $request->age_form;
        $cliente->email = $request->email_form;

        $cliente->save();

        return redirect('/');
    }


    public function delete($id){
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect('/');
    }
    

}

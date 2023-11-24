<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    //Função index, utilizada para listar todos os administradores//
    public function index()
    {
        $administradores = Administrador::all();
        return response()->json($administradores);
    }

    //Função para cadastro de administrador//
    public function store(Request $request)
    {
        $request->validate([
            'nome'=>'required',
            'email' => 'required|email|unique:administradores',
            'senha'=> 'required|min:6',
        ]);

        $novoAdmninistrador = Administrador::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'senha' => bcrypt($request->input('senha')),
        ]);

        return response()->json($novoAdmninistrador, 201);
    }

    public function show($id)
    {
        $administrador = Administrador::findOrFail($id);
        return response()->json($administrador);
    }
    
    public function update($id)
    {
        $administrador = Administrador::findOrFail($id);

        $request->validate
        ([
            'nome' => 'required',
            'email' => 'required|email|unique:administradores,email'. $id,
            'senha' => 'required|min:6',
        ]);

        $administrador->update([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'senha' => bcrypt($request->input('senha')),

        ]);

        return response()->json($administrador, 200);
    }

    public function destroy($id)
    {
        $administrador = Administrador::findOrFail($id);
        $administrador->delete();

        return response()->json(null, 204);
    }

}

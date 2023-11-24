<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function index()
    {
        $documentos = Documento::all();
        return response()->json($documentos);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'id' =>'required',
        ]);

        $documentos = Documento::create($request->all());

        return response()->json($documento, 201);
    }

    public function upate(Request $request, $id)
    {
        $documento = Documento::findOrFail($id);

        $request->validate([
            'nome' =>'required',
            'descricao' => 'required',
        ]);

        $documento->update($request->all());
        return response()->json($documento, 200);
    }

    public function destroy($id)
    {
        $documento = Documento::findOrFail($id);
        $documento->delete();

        return response()->json(null, 204);
    }

    public function download($id)
    {
        $documento = Documento::findOrFail($id);

        $file = public_path('caminho_desejado_para_arquivo') . $documento->arquivo;
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return response()->download($file, 'documento.pdf, $headers');
    }
}

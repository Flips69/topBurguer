<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    public function cadastrarCliente(Request $request){
        $clientes = Cliente::create([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'email' => $request->email,
            'cpf' => $request->cpf,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            "status" => true,
            "message" => "Cliente foi cadastrado com sucesso.",
            "data" => $clientes
        ], 200);
    }
}

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

    public function clienteStore(Request $request){

        $clienteData = $request->all();

        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $nomeImagem = time().'.'.$imagem->getClientOriginalExtension();
            $caminhoImagem = $imagem->storeAs('imagens/clientes', $nomeImagem, 'public');
            $produtoData['imagem'] = $caminhoImagem;
        }
        $clientes = Cliente::create($clienteData);
        return response()->json(['cliente'=>$clientes], 201);
    }
}

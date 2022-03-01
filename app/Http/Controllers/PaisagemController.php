<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Acrescentei
use App\Models\Paisagem; // Acrescentei

class PaisagemController extends Controller
{
    public function index() // Rota principal onde vai aparecer os dados da API
    {
        return Paisagem::all();
    }

    /* ------------------------------- */

    public function store(Request $request) // Insere os dados da API no BD
    {
        $request->validate([
            'paisagem' => 'required',
            'imagem' => 'required',
            'nome' => 'required',
            'país' => 'required',
            'cidade' => 'required',
        ]);

        return Paisagem::create($request->all());
    }

    /* ------------------------------- */

    public function show($id) // Retorna um registro pelo $id
    {
        return Paisagem::findOrfail($id);
    }

    /* ------------------------------- */

    public function update(Request $request, $id) // Para editar um registro pelo $id
    {
        $paisagem = Paisagem::findOrfail($id);
        $paisagem->update($request->all());
        return $paisagem;
    }

    /* ------------------------------- */

    public function destroy($id) // Exclui um registro pelo id
    {
        return Paisagem::destroy($id);
    }

    /* ------------------------------- */

    public function search($paisagem) // Traz a consulta pelo campo paisagem
    {
        return Paisagem::where('paisagem', 'like', '%'.$paisagem.'%')->get();

    }

}

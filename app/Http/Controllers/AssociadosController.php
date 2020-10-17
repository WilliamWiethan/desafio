<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AssociadoRequest;
use \App\Models\Associado;
use Illuminate\Database\Eloquent\Collection;
use PhpParser\ErrorHandler\Collecting;
use PhpParser\Node\Expr\FuncCall;

class AssociadosController extends Controller
{
    public function index(){
        $associados = Associado::all();
        return view('associados.index', compact('associados'));
    }

    public function new(){
        return view('associados.new');
    }

    public function store(AssociadoRequest $request){
        $associadoData = $request->all();
        $validator = $request->validated();
        $associado = new Associado();
        $associado->create($associadoData);
        return redirect()->route('associados.index')
            ->with('success', 'Associado cadastrado com sucesso');
    }

    public function edit(Associado $associado){
        return view('associados.edit', compact('associado'));
    }

    public function update(AssociadoRequest $request, $id){
        $request->validated();
        $associados = $request->all();
        $associado = Associado::findOrFail($id);
        $associado->update($associados);
        return redirect()->route('associados.index')
            ->with('success', 'Associado atualizado com sucesso');
    }

    public function delete($id){
        $associado = Associado::findOrFail($id);
        $associado->delete();
        return redirect()->route('associados.index')
            ->with('success', 'Associado deletado com sucesso');
    }

    public function contasAssociado($associado_id){
        $associado = Associado::where('id', $associado_id)->with('contas')->get()->toArray();
        return view('associados.contasAssociado', compact('associado'));
    }
}

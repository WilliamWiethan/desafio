<?php

namespace App\Http\Controllers;

use Exception;
use \App\Models\Conta;
use App\Models\Associado;
use App\Imports\ContaImport;
use Illuminate\Http\Request;
use App\Http\Requests\ContaRequest;
use Maatwebsite\Excel\Facades\Excel;

class ContasController extends Controller
{
    public function index()
    {
        $contas = Conta::all();
        return view('contas.index', compact('contas'));
    }

    public function new($associado_id)
    {
        $associado = Associado::findOrFail($associado_id);
        return view('contas.new', compact('associado'));
    }

    public function store(ContaRequest $request, $associado_id)
    {
        $contaData = $request->all();
        $validator = $request->validated();
        $conta = new Conta();
        $conta->create($contaData);
        return redirect()->route('associado.contasAssociado', ['associado_id' => $associado_id])
            ->with('success', 'conta cadastrado com sucesso');
    }

    public function edit($associado_id, $conta)
    {
        $associado = Associado::findOrFail($associado_id);
        $contaData = Conta::findOrFail($conta);
        return view('contas.edit', compact(['associado', 'contaData']));
    }

    public function update(ContaRequest $request, $associado_id)
    {
        $request->validated();
        $contaData = $request->all();
        $conta = Conta::findOrFail($contaData['conta']);
        $conta->update($contaData);
        return redirect()->route('associado.contasAssociado', ['associado_id' => $associado_id])
            ->with('success', 'conta cadastrado com sucesso');
    }

    public function delete($associado_id, $conta)
    {
        $contaDelete = Conta::findOrFail($conta);
        $contaDelete->delete();
        return redirect()->route('associado.contasAssociado', ['associado_id' => $associado_id])
            ->with('success', 'conta cadastrado com sucesso');
    }

    public function importForm()
    {
        return view('contas.importForm');
    }

    public function import(Request $request)
    {
        try {
            Excel::import(new ContaImport, $request->file);
        } catch (Exception $e) {
            return $this->errorResponse();
        }
    }
}

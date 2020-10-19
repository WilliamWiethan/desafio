<?php

namespace App\Http\Controllers;

use Exception;
use \App\Models\Conta;
use App\Models\Associado;
use App\Imports\ContaImport;
use Illuminate\Http\Request;
use App\Http\Requests\ContaRequest;
use App\Http\Requests\ImportCsvRequest;
use Maatwebsite\Excel\Facades\Excel;

class ContasController extends Controller
{
    public function index()
    {
        try {
            $contas = Conta::all();
            return view('contas.index', compact('contas'));
        } catch (Exception $e) {
            return $this->errorResponse();
        }
    }

    public function new($associado_id)
    {
        try {
            $associado = Associado::findOrFail($associado_id);
            return view('contas.new', compact('associado'));
        } catch (Exception $e) {
            return $this->errorResponse();
        }
    }

    public function store(ContaRequest $request, $associado_id)
    {
        try {
            $contaData = $request->all();
            $request->validated();
            $conta = new Conta();
            $conta->create($contaData);
            return redirect()->route('associado.contasAssociado', ['associado_id' => $associado_id])
                ->with('success', 'conta cadastrado com sucesso');
        } catch (Exception $e) {
            return $this->errorResponse();
        }
    }

    public function edit($associado_id, $conta)
    {
        try {
            $associado = Associado::findOrFail($associado_id);
            $contaData = Conta::findOrFail($conta);
            return view('contas.edit', compact(['associado', 'contaData']));
        } catch (Exception $e) {
            return $this->errorResponse();
        }
    }

    public function update(ContaRequest $request, $associado_id)
    {
        try {
            $request->validated();
            $contaData = $request->all();
            $conta = Conta::findOrFail($contaData['conta']);
            $conta->update($contaData);
            return redirect()->route('associado.contasAssociado', ['associado_id' => $associado_id])
                ->with('success', 'conta cadastrado com sucesso');
        } catch (Exception $e) {
            return $this->errorResponse();
        }
    }

    public function delete($associado_id, $conta)
    {
        try {
            $contaDelete = Conta::findOrFail($conta);
            $contaDelete->delete();
            return redirect()->route('associado.contasAssociado', ['associado_id' => $associado_id])
                ->with('success', 'conta cadastrado com sucesso');
        } catch (Exception $e) {
            return $this->errorResponse();
        }
    }

    public function importForm()
    {
        try {
            return view('contas.importForm');
        } catch (Exception $e) {
            return view('contas.index', compact($this->errorResponse()));
            return $this->errorResponse();
        }
    }

    public function import(ImportCsvRequest $request)
    {
        $request->validated();
        try {
            Excel::import(new ContaImport, $request->file);
            return redirect()->route('associados.index')
                ->with('success', 'Associado cadastrado com sucesso');
        } catch (Exception $e) {
            return view('contas.importForm');
        }
    }
}

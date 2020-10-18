<?php

namespace App\Http\Controllers;

use Exception;
use \App\Models\Associado;
use Illuminate\Http\Request;
use App\Http\Requests\AssociadoRequest;

class AssociadosController extends Controller
{
    public function index()
    {
        try {
            $associados = Associado::all();
            return view('associados.index', compact('associados'));
        } catch (Exception $e) {
            return $this->errorResponse();
        }
    }

    public function new()
    {
        try {
            return view('associados.new');
        } catch (Exception $e) {
            return $this->errorResponse();
        }
    }

    public function store(AssociadoRequest $request)
    {
        try {
            $associadoData = $request->all();
            $request->validated();
            $associado = new Associado();
            $associado->create($associadoData);
            return redirect()->route('associados.index')
                ->with('success', 'Associado cadastrado com sucesso');
        } catch (Exception $e) {
            return $this->errorResponse();
        }
    }

    public function edit(Associado $associado)
    {
        try {
            return view('associados.edit', compact('associado'));
        } catch (Exception $e) {
            return $this->errorResponse();
        }
    }

    public function update(AssociadoRequest $request, $id)
    {
        try {
            $request->validated();
            $associados = $request->all();
            $associado = Associado::findOrFail($id);
            $associado->update($associados);
            return redirect()->route('associados.index')
                ->with('success', 'Associado atualizado com sucesso');
        } catch (Exception $e) {
            return $this->errorResponse();
        }
    }

    public function delete($id)
    {
        try {
            $associado = Associado::findOrFail($id);
            $associado->delete();
            return redirect()->route('associados.index')
                ->with('success', 'Associado deletado com sucesso');
        } catch (Exception $e) {
            return $this->errorResponse();
        }
    }

    public function contasAssociado($associado_id)
    {
        try {
            $associado = Associado::where('id', $associado_id)->with('contas')->get()->toArray();
            return view('associados.contasAssociado', compact('associado'));
        } catch (Exception $e) {
            return $this->errorResponse();
        }
    }

    public function associadoPorAgencia()
    {
        try {
            $agencias = Associado::join('contas', 'associados.cpf', '=', 'contas.cpf')
                ->select(
                    'associados.nome',
                    'associados.cpf',
                    'contas.agencia',
                    'contas.conta',
                    'contas.tipo',
                    'contas.cpf'
                )
                ->get();
            $agencias = $agencias->groupBy('agencia');
            return view('agencias.associadoPorAgencia', compact('agencias'));
        } catch (Exception $e) {
            return $this->errorResponse();
        }
    }
}

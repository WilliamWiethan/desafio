@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col text-center">
            <h2>Contas do associado {{$associado[0]['nome']}}</h2>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">cpf</th>
                    <th scope="col">Conta</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Agência</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            @if (count($associado[0]['contas']) == 0)
            <tr>
                <td colspan="6" style="padding: 6px;">
                    Não foram encontradas contas.
                </td>
            </tr>
            @endif

            @foreach ($associado[0]['contas'] as $key=>$conta)
            <tr>
                <th scope="row">{{$key}}</td>
                <td>{{$associado[0]['cpf']}}</td>
                <td>{{$conta['conta']}}</td>
                <td>{{$conta['tipo']}}</td>
                <td>{{$conta['agencia']}}</td>
                <td class="btn-group" role="group">
                    <a type="button" class="btn btn-link"
                        href="{{route('contas.edit', ['associado_id' => $associado[0]['id'],'conta' => $conta['conta']])}}">Alterar</a>
                    <a type="button" class="btn btn-link"
                        href="{{route('contas.delete', ['associado_id' => $associado[0]['id'], 'conta' => $conta['conta']])}}">Excluir</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="row">
        <div class="col text-center">
            <a class="btn btn-dark" href="{{route('contas.new', ['associado_id' => $associado[0]['id']])}}"
                type="button">Novo</a>
        </div>
    </div>
</div>
@endsection

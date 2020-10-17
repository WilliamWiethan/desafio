@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <table class="table table-striped ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            @foreach ($associados as $key=>$item)
            <tr>
                <th scope="row">{{$key}}</td>
                <td>{{$item->nome}}</td>
                <td>{{$item->cpf}}</td>
                <td class="btn-group" role="group">
                    <a type="button" class="btn btn-link"
                        href="{{route('associados.edit', ['associado' => $item->id])}}">Alterar</a>
                    <a type="button" class="btn btn-link"
                        href="{{route('associados.delete', ['id' => $item->id])}}">Excluir</a>
                    <a type="button" class="btn btn-link"
                        href="{{route('associado.contasAssociado', ['associado_id' => $item->id])}}">Contas</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="row">
        <div class="col text-center">
            <a class="btn btn-dark" href="{{route('associados.new')}}" type="button">Novo</a>
        </div>
    </div>
</div>
@endsection

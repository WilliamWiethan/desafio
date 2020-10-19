@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <table class="table table-striped ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Conta</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Agência</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            @foreach ($contas as $key=>$item)
            <tr>
                <th scope="row">{{$key}}</td>
                <td>{{$item->cpf}}</td>
                <td>{{$item->conta}}</td>
                <td>{{$item->tipo}}</td>
                <td>{{$item->agencia}}</td>
                <td class="btn-group" role="group">
                    <a type="button" class="btn btn-link"
                        href="{{route('contas.edit', ['associado' => $item->id])}}">Alterar</a>
                    <a type="button" class="btn btn-link"
                        href="{{route('contas.delete', ['id' => $item->id])}}">Excluir</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="row">
        <div class="col text-center">
            <a class="btn btn-dark" href="{{route('contas.new')}}" type="button">Novo</a>
        </div>
    </div>
</div>
@endsection

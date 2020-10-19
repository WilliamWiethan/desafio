@extends('layout')
@section('content')
<div class="container-fluid">

    @if (count($agencias) == 0)
    <tr>
        <td colspan="6" style="padding: 6px;">
            Não foram encontrados registros.
        </td>
    </tr>
    @endif
    @foreach ($agencias as $agencia)
    <div class="col text-center">
        <h2>Agência {{$agencia[0]->agencia}}</h2>
    </div>
    <div class="col">
        <table class="table table-striped ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Conta</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Agência</th>
                </tr>
            </thead>
            @foreach ($agencia as $key=>$associado)
            <tr>
                <th scope="row">{{$key}}</td>
                <td>{{$associado->nome}}</td>
                <td>{{$associado->cpf}}</td>
                <td>{{$associado->conta}}</td>
                <td>{{$associado->tipo}}</td>
                <td>{{$associado->agencia}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    @endforeach
</div>
@endsection

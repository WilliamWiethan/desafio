@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h2>Associados</h2>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Editar/Excluir/Contas</th>
                </tr>
            </thead>
            @if (count($associados) == 0)
            <tr>
                <td colspan="6" style="padding: 6px;">
                    Não foram encontrados associados.
                </td>
            </tr>
            @endif
            @foreach ($associados as $key=>$item)
            <tr>
                <th scope="row">{{$key}}</td>
                <td>{{$item->nome}}</td>
                <td>{{$item->cpf}}</td>
                <td class="btn-group" role="group">
                    <div class="row">
                        <div class="col"><a href="{{route('associados.edit', ['associado' => $item->id])}}">
                                <svg width="1em" height="1em" viewBox="0 0 16 16"
                                    class="bi bi-pencil-fill text-secondary" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg>
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{route('associados.delete', ['id' => $item->id])}}">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill text-danger"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
                                </svg>
                            </a>
                        </div>
                        <div class="col"><a
                                href="{{route('associado.contasAssociado', ['associado_id' => $item->id])}}">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-credit-card-2-back-fill"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2z" />
                                    <path d="M0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z" />
                                </svg>
                            </a>
                        </div>
                    </div>
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

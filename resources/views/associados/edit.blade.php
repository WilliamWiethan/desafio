@extends('layout')

@section('content')
<h1> Edição de Associado</h1>
<form action="{{route('associados.update', ['id' => $associado->id])}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control{{$errors->has('nome') ? ' is-invalid' : ''}}" name="nome"
                value="{{$associado->nome}}">
            @if ($errors->has('nome'))
            <span class="invalid-feedback">
                <strong>
                    {{$errors->first('nome')}}
                </strong>
            </span>
            @endif
        </div>

        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control{{$errors->has('cpf') ? ' is-invalid' : ''}}" name="cpf"
                value="{{$associado->cpf}}">
            @if ($errors->has('cpf'))
            <span class="invalid-feedback">
                <strong>
                    {{$errors->first('cpf')}}
                </strong>
            </span>
            @endif
        </div>

    </div>
    <button type="submit" class="btn btn-dark">Salvar</button>
</form>
@endsection

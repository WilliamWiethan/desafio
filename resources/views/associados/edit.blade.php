@extends('layout')

@section('content')
<h1> Edição de Associado</h1>
<form action="{{route('associados.update', ['id' => $associado->id])}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        <div class="form-group">
            <label for="nome">Nome</label> <br>
            <input type="text" class="form-control" name="nome" value="{{$associado->nome}}"> <br>
            @if ($errors->has('nome'))
            <small class="form-text text-muted">{{$errors->first('nome')}}</small>
            @endif
        </div>
        <div class="form-group">
            <label for="cpf">CPF</label> <br>
            <input type="text" class="form-control" name="cpf" value="{{$associado->cpf}}"> <br>
            @if ($errors->has('cpf'))
            <small class="form-text text-muted">{{$errors->first('cpf')}}</small>
            @endif
        </div>
    </div>
    <button type="submit" class="btn btn-dark">Salvar</button>
</form>
@endsection

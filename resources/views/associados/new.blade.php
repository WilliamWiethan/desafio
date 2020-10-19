@extends('layout')
@section('content')
<div class="container">
    <h1> Novo Associado</h1>

    <form action="{{route('associados.store')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div>

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control{{$errors->has('nome') ? ' is-invalid' : ''}}" name="nome"
                    value="{{old('nome')}}">
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
                    value="{{old('cpf')}}">
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
</div>
@endsection

@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1> Edição de Conta</h1>
            <h3 class="font-weight-bold">Associado: {{$associado->nome}}</h3>
        </div>
    </div>
    <form action="{{route('contas.update', ['associado_id' => $associado->id, 'conta' => $contaData->conta])}}"
        method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" name="cpf" onfocus="this.blur()" value="{{$associado->cpf}}">
            @if ($errors->has('cpf'))
            <span class="invalid-feedback">
                <strong>
                    {{$errors->first('cpf')}}
                </strong>
            </span>
            @endif
        </div>

        <div class="form-group">
            <label for="conta">Conta</label> <br>
            <input type="number" class="form-control{{$errors->has('conta') ? ' is-invalid' : ''}}"
                onfocus="this.blur()" name="conta" value="{{$contaData->conta}}">
            @if ($errors->has('conta'))
            <span class="invalid-feedback">
                <strong>
                    {{$errors->first('conta')}}
                </strong>
            </span>
            @endif
        </div>

        <div>
            <div class="form-group">
                <label for="tipo">Tipo de Conta</label>
                <select id="inputState" class="form-control" name="tipo">
                    <option selected>Conta Corrente</option>
                    <option>Conta Poupança</option>
                    @if ($errors->has('conta'))
                    <small class="form-text text-danger">{{$errors->first('tipo')}}</small>
                    @endif
                </select>
            </div>

            <div class="form-group">
                <label for="agencia">Agência</label> <br>
                <input type="number" class="form-control{{$errors->has('agencia') ? ' is-invalid' : ''}}" name="agencia"
                    value="{{$contaData->agencia}}">
                @if ($errors->has('agencia'))
                <span class="invalid-feedback">
                    <strong>
                        {{$errors->first('agencia')}}
                    </strong>
                </span>
                @endif
            </div>

        </div>
        <button type="submit" class="btn btn-dark">Salvar</button>
    </form>
</div>

@endsection

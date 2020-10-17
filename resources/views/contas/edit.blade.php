@extends('layout')

@section('content')
<div class="row">
    <div class="col text-center">
        <h1> Edição de Conta</h1>
        <h3 class="font-weight-bold">Associado: {{$associado->nome}}</h3>
    </div>
</div>
<form action="{{route('contas.update', ['associado_id' => $associado->id, 'conta' => $contaData->conta])}}"
    method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        <div class="form-group">
            <label for="tipo">Tipo de Conta</label>
            <select id="inputState" class="form-control" name="tipo">
                <option selected>Conta Corrente</option>
                <option>Conta Poupança</option>
            </select>
        </div>
        <div class="form-group">
            <label for="conta">Conta</label> <br>
            <input type="number" class="form-control" name="conta" value="{{$contaData->conta}}"> <br>
            @if ($errors->has('conta'))
            <small class="form-text text-muted">{{$errors->first('conta')}}</small>
            @endif
        </div>
        <div class="form-group">
            <label for="cpf">CPF</label> <br>
            <input type="text" class="form-control" name="cpf" onfocus="this.blur()" value="{{$associado->cpf}}"> <br>
            @if ($errors->has('cpf'))
            <small class="form-text text-muted">{{$errors->first('cpf')}}</small>
            @endif
        </div>
        <div class="form-group">
            <label for="agencia">Agência</label> <br>
            <input type="number" class="form-control" name="agencia" value="{{$contaData->agencia}}"> <br>
            @if ($errors->has('agencia'))
            <small class="form-text text-muted">{{$errors->first('agencia')}}</small>
            @endif
        </div>
    </div>
    <button type="submit" class="btn btn-dark">Salvar</button>
</form>
@endsection

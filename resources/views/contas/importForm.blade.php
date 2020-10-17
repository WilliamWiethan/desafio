@extends('layout')

@section('content')
<section style="padding-top:60px;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Importação de Arquivo CSV
                    </div>
                    <div class="card-body text-center">
                        <form method="POST" enctype="multipart/form-data" action="{{route('contas.import')}}">
                            @csrf
                            <div class="form-group">
                                <input type="file" name="file" class="form-control-file">
                            </div>
                            <button type="submit" class="btn btn-dark">Carregar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

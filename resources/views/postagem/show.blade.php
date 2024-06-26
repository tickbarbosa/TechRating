@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center text-dark">
            <div class="col-md-8 text-dark">
                <div class="card mt-5 text-dark">
                    <div class="card-header">Postagem</div>

                    <div class="card-body">
                        <strong>Categoria:</strong>           {{ $postagem->categoria->nome }}<br>
                        <strong>Título:</strong>           {{ $postagem->titulo }}<br>
                        <strong>Autor:</strong>           {{ $postagem->user->name }}<br>
                        <strong>Conteúdo:</strong>           {{ $postagem->conteudo }}<br>
                        <strong>Criação:</strong>        {{ \Carbon\Carbon::parse($postagem->created_at)->format('d/m/y h:i:s') }}<br>
                        <strong>Atualização:</strong>    {{ \Carbon\Carbon::parse($postagem->updated_at)->format('d/m/y h:i:s') }}<br>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

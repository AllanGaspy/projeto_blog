@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <p><strong>Categoria:</strong> {{ $postagem->categoria_id }} </p>
                    <p><strong>Título:</strong> {{ $postagem->titulo }} </p>
                    <p><strong>Conteúdo:</strong> {{ $postagem->conteudo }} </p>
                    <p><strong>Autor:</strong> {{$postagem->user_id}} </p>
                    <p><strong>Criação:</strong> {{ $postagem->created_at }} </p>

                </div>
            </div>
        </div>
    </div>
@endsection

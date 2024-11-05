@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @if (session('mensagem'))
                    <br>
                    <div class="alert alert-success">
                        {{ session('mensagem') }}
                    </div>
                @endif

                <table class="table my-5">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Postagem - Título</th>
                            <th>Postagem - Autor</th>
                            <th>Denunciante</th>
                            <th>Conteúdo Denuncia</th>
                            <th>Status</th>
                            <th class="text-center">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($denunciaPostagem as $value)
                            <tr>
                                <th scope="row">{{ $value->id }}</th>
                                <td>{{ $value->postagem->titulo }}</td>
                                <td>{{ $value->postagem->autor->name }}</td>
                                <td>{{ $value->denunciante->name }}</td>
                                <td>{{ $value->conteudo }}</td>
                                <td>{{ $value->status }}</td>
                                <td class="d-flex justify-content-around">
                                    <a class="btn btn-primary" href="{{ url('/ModeracaoDenunciaPostagemAceito/' . $value->id) }}"
                                        role="button">ACEITO</a>
                                    <a class="btn btn-primary" href="{{ url('/ModeracaoDenunciaPostagemNegado/' . $value->id) }}"
                                        role="button">NEGADO</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection

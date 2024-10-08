@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="mx-auto">
                    <a href=" {{ url('/categoria/create') }} " class="btn btn-success" role="button"
                        aria-pressed="true">CRIAR</a>
                </div>

                @if (session('mensagem'))
                    <br>
                    <div class="alert alert-success">
                        {{ session('mensagem') }}
                    </div>
                @endif

                @if (session('exclusao'))
                    <br>
                    <div class="alert alert-danger">
                        {{ session('exclusao') }}
                    </div>
                @endif

                <script>
                    function ConfirmDelete() {
                        return confirm('Tem certeza que deseja excluir esse registro?');
                    }
                </script>

                <table class="table my-5">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th class="text-center">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorias as $value)
                            <tr>
                                <th scope="row">{{ $value->id }}</th>
                                <td>{{ $value->nome }}</td>
                                <td class="d-flex justify-content-around">
                                    <a class="btn btn-primary" href="{{ url('/categoria/' . $value->id) }}"
                                        role="button">Visualizar</a>
                                    <a class="btn btn-warning" href="{{ url('/categoria/' . $value->id . '/edit') }}"
                                        role="button">Editar</a>
                                    <form method="POST" action='{{ url('/categoria/' . $value->id) }}'
                                        onsubmit="return ConfirmDelete()">
                                        @method('DELETE')
                                        @csrf
                                        <input class="btn btn-danger" role="button" value="Excluir"
                                            type="submit"></input>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection

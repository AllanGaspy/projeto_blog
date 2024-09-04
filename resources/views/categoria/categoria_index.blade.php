@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="mx-auto">
                        <a href=" {{ url('/categoria/create') }} " class="btn btn-success" role="button" aria-pressed="true">CRIAR</a>
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
                        function ConfirmDelet(){
                            return confirm('Tem certeza que deseja excluir esse registro?');
                        }
                    </script>

                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Ações</th>
                        </tr>

                        @foreach ($categorias as $value )
                            <tr>
                                <td>{{$value->id}}</td>
                                <td>{{$value->nome}}</td>
                                <td><a href=" {{ url('/categoria/' . $value->id) }} " class="btn btn-primary " role="button" aria-pressed="true">Visualizar</a></td>
                                <td><a href=" {{ url('/categoria/' . $value->id . '/edit') }} " class="btn btn-warning " role="button" aria-pressed="true">Editar</a></td>
                                <td><form method='POST' action='{{ url('/categoria/' . $value->id) }}' onsubmit="return ConfirmDelet()">
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" class="btn btn-danger" value="Excluir">
                                </form></td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection

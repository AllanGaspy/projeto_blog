@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{URL('/postagem/' . $postagem->id)}}">
                        @method('PUT')
                        @csrf

                        <label for="cars">Escolha uma categoria:</label><br>

                        <select class="form-control" name="categoria_id" id="cars">

                            @foreach($categorias as $value)

                                @if($value->id == $postagem->categoria_id)
                                    <option selected='selected' value="{{ $value->id }}">{{ $value->nome }}</option>
                                @else
                                    <option value="{{ $value->id }}">{{ $value->nome }}</option>
                                @endif

                            @endforeach

                        </select>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Titulo</label>
                            <input type="text" name='titulo' value="{{ $postagem->titulo }}" class="form-control"placeholder="Digite o tiutlo da postagem">

                            <label for="exampleInputEmail1">Conteúdo</label>
                            <textarea name="conteudo" id="conteudo" class="form-control" cols="50" rows="4">{{ $postagem->conteudo }}</textarea>
                        </div>

                        <input type="submit" value="ENVIAR">
                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection

@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{ url('/richtexteditor/rte_theme_default.css') }}" />
<script type="text/javascript" src="{{ url('/richtexteditor/rte.js') }}"></script>
<script type="text/javascript" src='{{ url('/richtexteditor/plugins/all_plugins.js') }}'></script>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{URL('/postagem')}}" enctype="multipart/form-data">

                    @csrf
                    <div class="form-group">

                        <label for="cars">Escolha uma categoria:</label><br>

                        <select class="form-control" name="categoria_id" id="cars">

                            @foreach($categorias as $value)

                                <option value="{{ $value->id }}">{{ $value->nome }}</option>

                            @endforeach

                        </select>

                        <label>Imagem</label>
                        <input type="file" name='imagem' class="form-control">


                        <label for="exampleInputEmail1">Titulo</label>
                        <input type="text" name='titulo' class="form-control"placeholder="Digite o titulo da postagem">

                        <label for="exampleInputEmail1">Conteúdo</label>
                        <textarea name="conteudo" id="inp_editor1" class="form-control" cols="50" rows="4"></textarea>

                    </div>

                    <input type="submit" value="ENVIAR">
                </form>

                <script>
                    var editor1 = new RichTextEditor("#inp_editor1");
                </script>

            </div>
        </div>
    </div>
@endsection

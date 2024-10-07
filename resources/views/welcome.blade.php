@extends('layouts.app')

@section('content')

<article class="post">

    @foreach ($postagens as $value)

        <header>
            <div class="title">
                <h2><a href="#">{{ $value->titulo }}</a></h2>
            </div>
            <div class="meta">
                <time class="published" datetime="2015-11-01">{{ $value->created_at }}</time>
                <a href="#" class="author"><span class="name">{{ $value->autor->name }}</span><img src="images/avatar.jpg" alt="" /></a>
            </div>
        </header>


        <span class="image featured"><img src="data:image/png;base64, {{ $value->imagem }}"  alt=""></span>
        <p>{!! $value->conteudo !!}</p>

        <footer>
            <ul class="stats">
                <li><a href="{{ url('/feed/categoria' . $value->id) }}">{{ $value->categoria->nome }}</a></li>
                <li><a href="#" class="icon solid fa-heart">28</a></li>
                <li><a href="#" class="icon solid fa-comment">128</a></li>
            </ul>
        </footer>
    @endforeach
</article>

@endsection

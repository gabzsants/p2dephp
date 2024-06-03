@extends('header\menu')

@section('conteudo')
<h3>A página que você tentou acessar não existe ://</h3>
<img src={{asset ('img/imgfallback.jpg')}}>
<h3><a href="{{ route('site.paginaInicial') }}">Clique aqui</a> para voltar a página inicial.</h3>

@endsection
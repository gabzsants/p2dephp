@extends('styles\menu')

@section('conteudo')
<h3>Ops! A página que você tentou acessar não existe ;-;</h3>
<img class="gatinho" src={{asset ('img/imgfallback.jpg')}}>
<h3><a href="{{ route('site.paginaInicial') }}">Clique aqui</a> para voltar a página inicial.</h3>

@endsection
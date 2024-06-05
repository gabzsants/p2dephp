<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/styles.css')}}"> 
    </head>
 <body>
 <div class="topo">

            <div class="logo">
                <img width='60px' src={{asset ('img/logo.png')}}>
            </div>

            <div class='span-logo'> HelloDonut</div>

            <div class="menu">
              
            <ul>
            <li><a href="{{route('site.paginaInicial') }}">Home</a>
            </li> 

            <ul>
            <li><a href="{{route('site.sobreNos') }}">Sobre Nós</a>
            </li>

            <ul>
            <li><a href="{{route('site.produtos') }}">Produtos</a>
            </li>
            </ul>

            <ul>
            <li><a href="{{route('site.contato') }}">Contato</a>
            </li>
            </ul>

            <ul>
                <li><a href="{{route('site.cadastrarDonut') }}">Cadastrar Donut</a>
                </li>
                </ul>

            </div>
        </div>

        <main class='main'>
                @yield('conteudo')
        </main>
</body>
</html>

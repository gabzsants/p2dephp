@extends('header\menu')
@section('titulo', 'Sobre Nós')
@section('conteudo')

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>HelloDonut - Sobre Nós</title>
<body>
    <div class="container">
        <h1>Sobre Nós</h1>
        <p> Fundada no dia 10/10/2010, a Hello Donut nasceu com o objetivo de encantar os fãs da Hello Kitty, assim como nós, com doces temáticos e que homenageiam esta personagem tão querida, priorizando sempre a qualidade dos produtos e o preço acessível para que todos possam se maravilhar com estas delícias culinárias</p>
         
        
        <h1>Nossa História</h1>
        <p>Tudo começou com a paixão por donuts e pela Hello Kitty. Elas sonhavam em criar um espaço onde as pessoas pudessem saborear deliciosos donuts temáticos enquanto mergulhavam no mundo encantado dessa personagem tão querida; 
            principalmente depois de Gabriela ter feito uma viagem para o japão e Tayná ter aprofundado seus conhecimentos em donuts ao iniciar um curso de confeitaria. Assim nasceu a HelloDonut! </p>
            <p>E então, pouquíssimo tempo depois de termos começado em uma loja minúscula, nosso número de clientes aumentou cada dia mais. Tornando a Hello Donuts um paraíso para os amantes de doces e fãs dessa icônica personagem.</p>
        
        <h1>Nosso Ambiente</h1>
        <p>A HelloDonut é mais do que uma loja de donuts; é um lugar onde a magia dos donuts se encontra com a adorável Hello Kitty! Nossa decoração é toda temática, com murais da Hello Kitty, pelúcias fofinhas e até uma parede de selfies com a gatinha. Venha tirar fotos e compartilhar momentos especiais!</p>
        <p>Seja nosso cliente e venha nos visitar na Praça da Liberdade. Traga seus amigos, sua família e, é claro, sua paixão pela Hello Kitty. 
            Estamos ansiosos para recebê-lo!</p>
            <
            <img class="cafeteria" src={{asset ('img/tentativa.jpg')}}>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>
</html>

@endsection

@extends('footer\rodape')

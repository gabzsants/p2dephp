[22:49, 05/06/2024] Tayná: @extends('header\menu')
@section('titulo', 'pagina inicial')
@section('conteudo')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title></title>
</head>
<body>
    <div class="inicio">
    <p>Nossos mais doces e cordiais boas-vindas ao <strong>Hello Donuts</strong>!</p>
</div>
<br>
<br>
<br>
<br>
<div class="container">
<div class="card">
    <img class="hello" src={{asset ('img/hello.jpg')}}>
    </div>
    <div class="card">
            <h2>Nossos donuts são feitos com carinho e criatividade. Cada sabor é uma homenagem à Hello Kitty e sua turma</h2>
        </div>
        <div class="card">
            <img class="rainbown"src={{asset ('img/hello2.jpg')}}>
            </div>
        </div>
        <br>
        <br>

        <h1>Destaques da Semana</h1>
<p>Não sabe qual escolher? Um dos favoritos pode ser o seu ^^</p>
<div class="card2">
    <img class="donut" src={{asset ('img/donuttest.jpg')}}>
    <h2>PompomDonut</h2>
    <p>recheio de brigadeiro de creme de avelã enfeitado com cobertura de ganache de chocolate</p>
        <h4>R$ 8,00</h4>
        <button class="add-to-cart">Adicionar ao Carrinho <i class="fa fa-cart-shopping"></i></button>
    </div>

    <div class="card2">
        <img class="pink" src={{asset ('img/donuttest.jpg')}}>
        <h2>Tradicional</h2>
        <p>Recheio de creme coberto por deliciosa ganache de chocolate branco</p>
            <h4>R$ 12,00</h4>
            <button class="add-to-cart">Adicionar ao Carrinho <i class="fa fa-cart-shopping"></i></button>
        </div>

        <div class="card2">
            <img class="red" src={{asset ('img/donuttest.jpg')}}>
            <h2>My Melody</h2>
            <p>recheio de bicho de pé enfeitado com pasta americana</p>
                <h4>R$ 15,00</h4>
                <button class="add-to-cart">Adicionar ao Carrinho <i class="fa fa-cart-shopping"></i></button>
            </div>

</body>
</html>

@endsection

@extends('footer\rodape')

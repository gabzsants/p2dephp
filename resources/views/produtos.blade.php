@extends('header\menu')
@section('titulo', 'Produtos')
@section('conteudo')

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - HelloDonut</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="produtos">
    <h1>Conheça os nossos Donuts!</h1>
    </div>

    <div class="card">
    <img src={{asset ('img/donuttest.jpg')}}>
        <h2>Donut Clássico</h2>
        <p>Descrição do produto</p>
        <h4>R$ 3,50</h4>
        <button class="add-to-cart">Adicionar ao Carrinho <i class="fa fa-cart-shopping"></i></button>
    </div>

    <div class="card">
    <img src={{asset ('img/donuttest.jpg')}}>
    <h2>Donut de Chocolate</h2>
    <p>Descrição do produto</p>
        <h4>R$ 4,00</h4>
        <button class="add-to-cart">Adicionar ao Carrinho <i class="fa fa-cart-shopping"></i></button>
    </div>

    <div class="card">
        <img src={{asset ('img/donuttest.jpg')}}>
        <h2>Donut de Chocolate</h2>
        <p>Descrição do produto</p>
            <h4>R$ 4,00</h4>
            <button class="add-to-cart">Adicionar ao Carrinho <i class="fa fa-cart-shopping"></i></button>
        </div>

        <div class="card">
            <img src={{asset ('img/donuttest.jpg')}}>
            <h2>Donut de Chocolate</h2>
            <p>Descrição do produto</p>
                <h4>R$ 4,00</h4>
                <button class="add-to-cart">Adicionar ao Carrinho <i class="fa fa-cart-shopping"></i></button>
            </div>

            <div class="card">
                <img src={{asset ('img/donuttest.jpg')}}>
                <h2>Donut de Chocolate</h2>
                <p>Descrição do produto</p>
                    <h4>R$ 4,00</h4>
                    <button class="add-to-cart">Adicionar ao Carrinho <i class="fa fa-cart-shopping"></i></button>
                </div>

                <div class="card">
                    <img src={{asset ('img/donuttest.jpg')}}>
                    <h2>Donut de Chocolate</h2>
                    <p>Descrição do produto</p>
                        <h4>R$ 4,00</h4>
                        <button class="add-to-cart">Adicionar ao Carrinho <i class="fa fa-cart-shopping"></i></button>
                    </div>

                    <div class="card">
                        <img src={{asset ('img/donuttest.jpg')}}>
                        <h2>Donut de Chocolate</h2>
                        <p>Descrição do produto</p>
                            <h4>R$ 4,00</h4>
                            <button class="add-to-cart">Adicionar ao Carrinho <i class="fa fa-cart-shopping"></i></button>
                        </div>

                        <div class="card">
                            <img src={{asset ('img/donuttest.jpg')}}>
                            <h2>Donut de Chocolate</h2>
                            <p>Descrição do produto</p>
                                <h4>R$ 4,00</h4>
                                <button class="add-to-cart">Adicionar ao Carrinho <i class="fa fa-cart-shopping"></i></button>
                            </div>

</body>
</html>
@endsection
@extends('footer\rodape')

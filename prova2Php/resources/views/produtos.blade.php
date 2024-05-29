@extends('header\menu')

@section('conteudo')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - HelloDonut</title>
</head>
<body>
    <div class="card">
    <img src={{asset ('img/donuttest.jpg')}}>
        <h2>Donut Clássico</h2>
        <p>R$ 3,50</p>
        <button class="add-to-cart">Adicionar ao Carrinho</button>
    </div>

    <div class="card">
    <img src={{asset ('img/donuttest.jpg')}}>
    <h2>Donut de Chocolate</h2>
        <p>R$ 4,00</p>
        <button class="add-to-cart">Adicionar ao Carrinho</button>
    </div>

    <!-- Adicione mais cards conforme necessário -->

</body>
</html>
@endsection
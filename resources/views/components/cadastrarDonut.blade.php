@extends('header\menu')
@section('titulo', 'Cadastrar Donut')
@section('conteudo')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <h1>Cadastrar um novo sabor de Donut</h1>
    <form action = {{ route('site.cadastrarDonut') }} method="post">
        <label for="nome">Nome do Donut: </label>
        <input id="nome" type="text" </input>
        <br><br>
        <label for="sabor">Sabor: </label>
        <input id="sabor" type="text" </input>
        <br><br>
        <label for="descricao">Descrição: </label>
        <input id="descricao" type="text" </input>
        <br><br>
        <label for="preco">Preço: </label>
        <input id="preco" type="float" </input>
        <br><br>
        <label for="imagem">Imagem do Donut: </label>
        <input id="imagem" type="image" </input>
        <br><br>

        <button type="submit">Enviar <i class="fa fa-paper-plane"></i></button>
        <button type="submit">Editar </button>
        <button type="reset">Excluir </button>


    </form>
</body>
</html>
@endsection
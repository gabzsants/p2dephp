@extends('header/menu')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Contato</title>
</head>
<body>
    <h1>Editar mensagem de contato</h1>
    <form action=" {{ route('contato.update', $contatodb->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome: </label>
        <input id="nome" type="text" name="nome" value="{{ $contatodb->nome }}" required>
        <br><br>
        <label for="email">E-mail: </label>
        <input id="email" type="text" name="email" value="{{ $contatodb->email }}" required>
        <br><br>
        <label for="assunto">Assunto: </label>
        <select id="assunto" name="assunto" value="{{ $contatodb->assunto }}" required>
            <option value="1">Dúvida</option>
            <option value="2">Elogio</option>
            <option value="3">Sugestão</option>
            <option value="4">Suporte</option>
            <option value="5">Trabalhe Conosco</option>
            <option value="6">Outros</option>
        </select>
        <br><br>
        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" value="{{ $contatodb->mensagem }}" required></textarea>
        <br><br><br>
        <button type="submit">Enviar <i class="fa fa-paper-plane"></i></button>
        <button class="editar" type="submit" action={{ route('registers.destroy', $register->id) }}" method="POST" class="d-inline">Editar</button>
        <button class="deletar" type="submit">Deletar</button>
        @csrf
        @method('DELETE')
    </form>
</body>
</html>
@extends('footer\rodape')

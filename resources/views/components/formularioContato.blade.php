
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
    <h1>Entre em contato Conosco!</h1>
    <form action = {{ route('site.contato') }} method="post">
        @csrf
        <label for="nome">Nome: </label>
        <input id="nome" type="text" </input>
        <br><br>
        <label for="email">E-mail: </label>
        <input id="email" type="text" </input>
        <br><br>
        <label for="assunto">Assunto: </label>
        <select id="assunto">
            <option value="1">Dúvida</option>
            <option value="2">Elogio</option>
            <option value="3">Sugestão</option>
            <option value="4">Suporte</option>
            <option value="5">Trabalhe Conosco</option>
            <option value="6">Outros</option>
        </select>
        <br><br>
        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem"></textarea>
        <br><br><br>
        <button type="submit">Enviar <i class="fa fa-paper-plane"></i></button>
        <button type="submit">Editar</button>
        <button type="submit">Excluir</button>


    </form>
</body>
</html>

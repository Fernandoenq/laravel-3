<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
</head>
<body>
    <h1>Criar produtos</h1>
    <form action="/products/store" method="post">
        @csrf
        <input name="name" placeholder="Bota o nome aqui">
        <input name="description" placeholder="Bota a descrição aqui">
        <input name="price" placeholder="Bota o valor aqui" type="number">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
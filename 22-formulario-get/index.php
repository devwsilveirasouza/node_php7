<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>

    <form action="dados.php" method="GET">

        Nome: <input type="text" name="nome" /><br><br>
        Email: <input type="email" name="email" /><br><br>

        <button type="submit" name="enviar">Enviar</button><br>
        <!-- Enviando parâmetros pela url -->
        <a href="dados.php?idade=25&sobrenome=Souza">Enviar dados</a>

    </form>

</body>

</html>
<?php
    // Recebendo os dados enviados pelo formulário
    $nome   = $_GET['nome'];
    $email  = $_GET['email'];

    echo "<br>";
    echo "Seu nome é $nome e seu email é $email.";
    echo "<br>";
    echo $_GET['idade'];
    echo "<br>";
    echo $_GET['sobrenome'];
    echo "<br>";
    var_dump($_GET);
    echo "<br>";
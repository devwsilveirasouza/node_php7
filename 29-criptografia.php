<?php 
    // CRIPTOGRAFIA
    $senha = "123456";

    // base64
    $novaSenha = base64_encode($senha);

    echo $novaSenha;
    echo "<br>";
    echo "<hr>";

    // base64
    $novaSenha = base64_decode($novaSenha);

    echo $novaSenha;
    echo "<br>";
    echo "<hr>";

    // md5
    $novaSenha = md5($senha);

    echo $novaSenha;
    echo "<br>";
    echo "<hr>";

    // sha1
    $novaSenha = sha1($senha);

    echo $novaSenha;
    echo "<br>";
    echo "<hr>";

    // password_hash
    $senha = "123456";
    $senha_db = '$2y$10$r0vjAFLzJVldQI0jUhrpwulbGJ2OMLOAtqOuhC.IZ.Oltsl4bPkLi';

    if (password_verify($senha, $senha_db)):
        echo "Senha válida";
    else:
        echo "Senha inválida";
    endif;

    // Quanto maior o 'cost' mais seguro, porém mais consumo de hardware
    $options = [
        'cost' => 10, // Valor padrão "10".
    ];
    // Opcional o "cost"
    $senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
    echo "<br>";
    echo $senhaSegura;
    echo "<br>";
    echo "<br>";
    echo "<br>";

?>
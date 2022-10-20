<?php 

    // COOKIE
    setcookie('user','Wellington', time()+3600);
    setcookie('email','wsilveirasouza@test.com', time()+3600);
    setcookie('ultima_pesquisa','tenis adidas', time()+3600);

    var_dump($_COOKIE);

    // PARA REMOVER UM COOKIE BASTA MUDAR O SIMBOLO DE POSITIVO PARA NEGATIVO 
    // EX: +3600 PARA -3600

?>
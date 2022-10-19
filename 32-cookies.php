<?php 

    // COOKIE
    setcookie('user','Wellington', time()+3600);
    setcookie('email','wsilveirasouza@test.com', time()+3600);
    setcookie('ultima_pesquisa','tenis adidas', time()+3600);

    var_dump($_COOKIE);



?>
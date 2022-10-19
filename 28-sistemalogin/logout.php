<?php

// Encerrando a sessão
session_start();
session_unset();
session_destroy();
// Redirecionando o usuário para index
header('Location: index.php');
?>
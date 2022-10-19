<?php
 // CONEXÃO COM O DANCO DE DADOS

 $servername = "localhost";
 $username = "root";
 $password = "";
 $db_name = "sistemalogin";

 // Criando a conexão
 $connect = mysqli_connect($servername, $username, $password, $db_name);
 
 // Verifiar se existe algum erro na conexão
 if (mysqli_connect_error()):
    echo "Falha na conexão: ".mysqli_connect_error();
 else:
    echo "Conectado!";
 endif;




 ?>
<?php
// MANIPULAÇÃO DE ARQUIVOS

/**
 * fopen
 * fclose
 * fwrite
 * !feof
 * fgets
 * filesize
 */
 $arquivo = 'arquivo.txt';
 $conteudo = "Incluindo no texto.\r\n";

//  $arquivoAberto = fopen($arquivo, 'a');// ABRE O ARQUIVO E ATIVA PARA ESCRITA
//  fwrite($arquivoAberto, $conteudo);
//  fclose($arquivoAberto);

 echo "Incluíndo texto em arquivo.";
 echo "<br>";
 echo "<hr>";

 echo "Fazendo leitura de arquivo.";

 echo "<br>";
 echo "<br>";

 $arquivoAberto = fopen($arquivo, 'r');// ABRE O ARQUIVO E ATIVA LEITURA

 $tamanhoArquivo = filesize($arquivo);// PEGANDO O TAMANHO DO ARQUIVO

 while(!feof($arquivoAberto)):
    $linha = fgets($arquivoAberto, $tamanhoArquivo);    
    echo $linha."<br>";
 endwhile;

 fclose($arquivoAberto);

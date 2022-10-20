<?php
// DATAS
date_default_timezone_set('America/Sao_Paulo');

echo date('d')."<br><br>";
echo date('D')."<br><br>";
echo date('m')."<br><br>";
echo date('M')."<br><br>";
echo date('y')."<br><br>";
echo date('Y')."<br><br>";
echo date('d/m/Y')."<br><br>";
echo date('l')."<br><br>";
echo date('d/m/Y H:i:s')."<br><br>";
echo date('H:i:s')."<br><br>";

echo "<hr>";
$date = date('Y-m-d');
$datetime = date('Y-m-d H:i:s'); // Padrão datetime
echo $datetime."<br><br>";

echo "<hr>";
// TIME
echo time();
 echo "<br>";   
 $time = time();
 echo date('d/m/Y', $time);

 echo "<hr>";
 // MKTIME <== Formatando datas
 $data_pagamento = mktime(12, 30, 00, 02, 15, 2023);
echo date('d/m/y - h:i', $data_pagamento);

echo "<hr>";
// STRTOTIME
$data = '2019-04-10 13:30:00';
$data_formatada = strtotime($data);

echo date('d/m/Y', $data_formatada);

<?php

echo "<br>";
echo "<h3> // SUPER GLOBAIS // </h3><br>";
echo '$_GLOBALS<br>';  
echo '$_SERVER<br>';  
echo '$_REQUEST<br>';  
echo '$_POST<br>';  
echo '$_GET<br>';  
echo '$_FILES<br>';  
echo '$_ENV<br>';  
echo '$_COOKIE<br>';  
echo '$_SESSION<br>';  
echo "<br>";
echo "<br>";

$x = 10;
$y = 20;

function soma() {
    echo $GLOBALS['x'] + $GLOBALS['y'];
}

soma(8, 9);

echo "<br>";
echo "<hr>";

echo "<br>";
echo '<h3> // $_SERVER // </h3>';
echo "<br>";
echo "<br>";

echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";

echo "<br>";





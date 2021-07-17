<?php

$host = "localhost";
$dbname = "siteaquitecto";
$dbuser = "root";
$dbpsw = "";

$conexion = mysqli_connect($host, $dbuser, $dbpsw, $dbname);

if (!$conexion) {
die("No conectado: " . mysqli_connect_error());
echo "no conectado";    
}

echo "";
echo "";
?>
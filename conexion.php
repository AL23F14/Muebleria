<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="muebleria";

$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$con){
    die("No hay conexión".mysqli_connect_error());
}
?>
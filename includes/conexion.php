<?php
//coneccion

$servidor='localhost';
$usuario='administrador';
$password='Admin.,123';
$basededatos='bolg_master';

//?conexion a base de datos
$db=mysqli_connect($servidor,$usuario,$password,$basededatos);

mysqli_query($db,"SET NAMES 'utf8'");

//?iniciar sesión
session_start();

?>



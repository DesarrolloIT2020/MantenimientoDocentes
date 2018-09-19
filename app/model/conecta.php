<?php 
$host="localhost";
$user="root";
$pass="";
$bd="asistencia_2018_2";

$conexion=mysqli_connect($host,$user,$pass);
$bds=mysqli_select_db($conexion,$bd);
?>
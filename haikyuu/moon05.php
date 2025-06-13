<?php
error_reporting(E_ALL)
ini_set('display_error',1)
 $username = "root";
 $password = "";
 $servername = "localhost";
 $database = "cetis 131";
  $conexion = new mysqli($servername, $username, $password, $database); 
  if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
      }

//Obtener los datos del dropdown
$sql_edad ="SELECT id, edad FROM edades";
$sql_colonias = "SELECT id, colonia FROM colonia";
$sql_especialidades = "SELECT id, colonia FROM especialidades";
$sql_generos = "SELECT id, genero FROM generos";
$result_edad = $conexion->query($sql_edad);
$result_colonias = $conexion->query($sql_colonias);
$result_especialidades= $conexion->query($sql_especialidades);
?>

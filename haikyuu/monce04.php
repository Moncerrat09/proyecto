<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mi pagina</title>
   <<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<body>
      <nav class="navbar navbar-light" style="background: linear-gradient(#5e2727bb, rgb(85, 30, 30),rgb(53, 17, 17))">
        <div class="container" style="font-family: 'Feltpen', sans-serif;">
            <a class="navbar-brand" href="index.html" style="color: white; ">Inicio</a>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white; font-family: 'Madelis Script', sans-serif;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Parcial 1</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/haikyuu/monce01.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/haikyuu/monce02.php">Mostrar datos 2</a><br>
                            <a class="dropdown-item" href="/haikyuu/monce03.php">Meter datos</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white; font-family: 'Madelis Script', sans-serif;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Parcial 2</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/haikyuu/monce04.php">Mostrar </a><br>
                            <a class="dropdown-item" href="/haikyuu/monce05.php">Mostrar datos</a><br>
                           <a class="dropdown-item" href="https://moncerrat09.github.io/1-parcial-/haikyuu/monce06.html">pokedex</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white; font-family: 'Madelis Script', sans-serif;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Parcial 3</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="https://moncerrat09.github.io/1-parcial-/haikyuu/monce07.html">Peliculas Api</a><br>
                            <a class="dropdown-item" href="https://moncerrat09.github.io/1-parcial-/haikyuu/monce08.html">Dragon Ball</a><br>
                            <a class="dropdown-item" href="https://moncerrat09.github.io/1-parcial-/haikyuu/monce09.html">Proyecto Fina</a><br>
                        </div>
                    </li>

                    
                </ul>
            </div>
          </nav>
        </header>


    <div class="jumbotron">
        <h1  class="display-4 font" style="text-align: center; font-family: 'Flagmen', sans-serif;">Mostrar Datos</h1>
        <style>
            h1 {
                
                text-align: center;
                color: #000;
                margin-bottom: 20px;
            }
            
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 50px;
                border-radius: 50px;
            }
            
            th,td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid rgb(53, 17, 17);
            }
            
            tr:nth-child(even) {
                background-color: rgb(53, 17, 17);
                color: black;
            }
            
            tr:nth-child(odd) {
                background-color: white;
                color: black;
            }
            
            th {            
                background-color: rgb(53, 17, 17);
                color: pink;
            }

        
        </style>
       <style>
            .container1{
                width:70%;
                background-color:#282a36;
                padding:20px;
                border-radius:10px;
                box-shadow: 0 0 10px;
                color:white;
            }
            h1{
                text-align:center;
                color:#ff79c6;
                margin-bottom:15px;
            }
            form{
                flex-direction:column;
            }
            label{
                font-size:16px;
                margin-bottom:5px;
            }
            input[type="text"] {
                display:flex;
                justify-content:center;
                align-items:center;
                padding: 8px;
                margin-bottom: 10px;
                border: none;
                border-radius:5px;
                font-size:16px;
                background-color:#44475a;
                color:#fff
            }
            input[type="submit"] {
            padding:10px;
            background-color:rgb(255, 168, 240);
            border:none;
            color:#282a36;
            font-size: 16px;
            border-radius: 5px;
            cursor:pointer;
            transition: background 0.3;
            }
            input[type="submit"]:hover {
                background-color:#fff;
                
            }
        </style>
      <div class="container1">

<table class="table table-bordered">
    <thead>
        <tr>
            <th>numero de control</th>
            <th>nombre</th>
            <th>apellido paterno</th>
            <th>apellido materno</th>
            <th>edad</th>
            <th>especialidad</th>
            <th>genero</th>
            <th>correo</th>
            <th>telefono</th>
            <th>fecha de ingreso</th>

        </tr>
    </thead>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "escuela";

        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("Conexion Fallida: " . $conexion->connect_error);
        }

      

        
$sql = "SELECT 
        a.numero_control,
        a.nombre,
        a.apellido_paterno,
        a.apellido_materno,
        e.edad,
        es.nombre_especialidad,
        g.nombre_genero,
        a.correo,
        a.telefono,
        a.fecha_ingreso
        FROM alumnos a
        JOIN edades e ON a.id_edad = e.id
        JOIN especialidades es ON a.id_especialidad =es.id
        JOIN generos g ON a.id_genero = g.id";

$resultado = $conexion->query($sql);

if($resultado->num_rows > 0) {

    while($row = $resultado->fetch_assoc()){
        echo "<tr>
        <td>  {$row['numero_control']} </td>
        <td>  {$row['nombre']} </td>
        <td>  {$row['apellido_paterno']} </td>
        <td>  {$row['apellido_materno']} </td>
        <td>  {$row['edad']} </td>
        <td>  {$row['nombre_especialidad']} </td>
        <td>  {$row['nombre_genero']} </td>
        <td>  {$row['correo']} </td>
        <td>  {$row['telefono']} </td>
        <td>  {$row['fecha_ingreso']} </td>
        </tr>";


}
}else{
    echo "<p>no encontrado</p>";
}
$conexion->close();
        ?>
        </table>

        </div>
</body>
</html>
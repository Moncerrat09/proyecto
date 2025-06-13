<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mi pagina</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/dimitri" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/flagmen" rel="stylesheet">
                
    
    
<body>
<nav class="navbar navbar-light" style="background: linear-gradient(#ca0000bb, rgb(228, 16, 133),rgb(255, 72, 224))">
        <div class="container" style="font-family: 'Feltpen', sans-serif;">
            <a class="navbar-brand" href="index.html" style="color: white; ">Inicio</a>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white; font-family: 'Madelis Script', sans-serif;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 1</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/haikyuu/monce01.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/haikyuu/monce02.php">Mostrar datos 2</a><br>
                            <a class="dropdown-item" href="/haikyuu/monce03.php">Meter datos</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white; font-family: 'Madelis Script', sans-serif;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 2</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/haikyuu/monce04.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/haikyuu/monce05.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/haikyuu/monce06.php">Meter datos</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white; font-family: 'Madelis Script', sans-serif;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 3</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/haikyuu/monce07.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/haikyuu/monce08.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="/haikyuu/monce09.php">Meter datos</a><br>
                            <a class="dropdown-item" href="/haikyuu/monce10.php">Meter datos</a><br>
                        </div>
                    </li>

                    
                </ul>
            </div>
            

        </div>
    </nav>

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
                border-bottom: 1px solid rgb(158, 8, 151);
            }
            
            tr:nth-child(even) {
                background-color: rgb(247, 92, 221);
                color: black;
            }
            
            tr:nth-child(odd) {
                background-color: white;
                color: black;
            }
            
            th {            
                background-color: rgb(255, 64, 214);
                color: white;
            }

        
        </style>
       <style>
            .container1{
                width:50%;
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
        
        <form method="POST" id="formulario">
            <label foors="numero_control">Numero de Control: </label>
            <input type="text" id="numero_control" name="numero_control"
            required></br>
            <label foors="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre"
            required></br>
            <label foors="apellido paterno">Apellido Paterno: </label>
            <input type="text" id="apellido paterno" name="apellido paterno"
            required></br>
            <label foors="Apellido materno:">Apellido materno: </label>
            <input type="text" id="Apellido materno:" name="Apellido materno:"
            required></br>
            <label foors="Edad">Edad</label>
            <input type="text" id="Edad" name="Edad"
            required></br>
            <label foors="Colonia">Colonia</label>
            <input type="text" id="Colonia" name="Colonia"
            required></br>
            <label foors="especialidad">especialidad</label>
            <input type="text" id="especialidad" name="especialidad"
            required></br>
            <label foors="correo electronico">correo electronico</label>
            <input type="text" id="correo electronico" name="correo electronico"
            required></br>
        <input type="submit" value="Agregar Registro">
        </form>




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

      function insertarAlumno($conexion)
{
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        var_dump($_POST); //linea dedicado para depurar
        $numero_control = $conexion->real_escape_string($_POST["numero_control"]);
        $nombre = $conexion->real_escape_string($_POST["nombre"]);
        $apellido_paterno = $conexion->real_escape_string($_POST["apellido_paterno"]);
        $apellido_paterno = $conexion ->real_escape_STRING($_POST["apellido_paterno"]);
        $edad = $conexion->real_escape_string($_POST ["edad"]);
        $colonia= $conexion->real_escape_string($_POST ["colonia"]);
        $especialidad = $conexion->real_escape_string($_POST ["especialidad"]);
        $genero = $conexion->real_escape_string($_POST ["genero"]);
        $correo = $conexion->real_escape_string($_POST ["correo"]);
        $telefono = $conexion->real_escape_string($_POST ["telefono"]);
        $fecha_ingreso = $conexion->real_escape_string($_POST ["fecha_ingreso"]);
 }
 // Consulta SQL para insertar los datos
 $sql = "INSERT INTO Alumnos (numerto_control), nombre, apellido_paterno, apellido materno, eadad
 colonia, especialidad, genero, correo, telefono, fecha_ingreso)
 VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno', '$edad',
 '$colonia', '$especialidad', '$genero', '$correo', '$fecha_ingreso')";
 if ($conexion->query($sql) === TRUE){
    echo "<p class='success'> Nuevo alumno agregado con exito.</p>";
    header("Location. " . $_SERVER['PHP_SELF']);
    exit();
 }else{
    echo "<p class='error'>Error al agregar al alumno: " . $conexion->error . "</p>";
 }
}
insertarAlumno($conexion);
// Mostrar datos de la tabla
$sql = "SELECT * FROM alumnos";
$resultado = $conexion->num_rows > 0)
    $conexion->close();

$resultado = $conexion->query($sql);

if($resultado->num_rows > 0) {

    while($row = $resultado->fetch_assoc()){
        echo "<tr>
        <td>  {$row['numero_control']} </td>
        <td>  {$row['nombre']} </td>
        <td>  {$row['apellido_paterno']} </td>
        <td>  {$row['apellido_materno']} </td>
        <td>  {$row['edad']} </td>
        <td>  {$row['nombre_colonia']} </td>
        <td>  {$row['nombre_especialidad']} </td>
        <td>  {$row['nombre_genero']} </td>
        <td>  {$row['correo']} </td>
        <td>  {$row['telefono']} </td>
        <td>  {$row['fecha_ingreso']} </td>
        </tr>";


}
}else{
    echo "<p>nose encontro</p>";
}
$conexion->close();
        ?>
        </div>
</body>
</html>
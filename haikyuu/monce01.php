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
                            <a class="dropdown-item" href="https://moncerrat09.github.io/proyecto/haikyuu/monce01.php">Mostrar datos</a><br>
                            <a class="dropdown-item" href="https://moncerrat09.github.io/proyecto/haikyuu/monce02.php">Mostrar datos 2</a><br>
                            <a class="dropdown-item" href="https://moncerrat09.github.io/proyecto/haikyuu/monce03.php">Meter datos</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white; font-family: 'Madelis Script', sans-serif;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Parcial 2</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="https://moncerrat09.github.io/proyecto/haikyuu/monce04.php">Mostrar </a><br>
                            <a class="dropdown-item" href="https://moncerrat09.github.io/proyecto/haikyuu/monce05.php">Mostrar datos</a><br>
                           <a class="dropdown-item" href="https://moncerrat09.github.io/proyecto/haikyuu/monce06.html">pokedex</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white; font-family: 'Madelis Script', sans-serif;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Parcial 3</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="https://moncerrat09.github.io/proyecto//haikyuu/monce07.html">Peliculas Api</a><br>
                            <a class="dropdown-item" href="https://moncerrat09.github.io/proyecto/haikyuu/monce08.html">Dragon Ball</a><br>
                            <a class="dropdown-item" href="https://moncerrat09.github.io/proyecto/haikyuu/monce09.html">Proyecto Fina</a><br>
                        </div>
                    </li>

                    
                </ul>
            </div>
          </nav>
        </header>


    <div class="jumbotron">
        <h1  class="display-4 font" style="text-align: center;
        background: linear-gradient(to right, rgb(53, 17, 17), rgb(53, 17, 17), red);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;     font-family: 'Dimitri', sans-serif;    font-family: 'Dimitri Swank', sans-serif;">4 A Programacion</h1><center>
        <h2 class="lead" style=" color: rgb(0, 0, 0);">Implementa Base de Datos Realacionales En Un Sistema De Información</h2>
    </center><hr class="my-4">
        <p style="text-align: center;  font-family: 'Flagmen', sans-serif;">Monche
        </p>
        <p class="lead">

        </p>
    </div>
    </nav>

    <div class="jumbotron">
        <h1  class="display-4 font" style="text-align: center; font-family: 'Snowpe', sans-serif;">Mostrar Datos</h1>

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
                border-bottom: 1px solid rgb(255, 168, 240);
            }
            
            tr:nth-child(even) {
                background-color: rgb(211, 20, 20);
                color: black;
            }
            
            tr:nth-child(odd) {
                background-color: white;
                color: black;
            }
            
            th {            
                background-color: rgb(80, 8, 8);
                color: white;
            }


        
        </style>

<?php
$username = "root";
$password = "";
$servername = "localhost";
$database = "haikyuu";

$conexion = new mysqli($servername, $username, $password, $database);
if ($conexion->connect_error) {
    die("Conexion Fallida: " . $conexion->connect_error);
}

$sql = "SELECT * FROM personajes"; 
$resultado = $conexion->query($sql);
?>
<div class="container">
    <h1 class="display-4 font" style="text-align: center; font-family: 'Feltpen', sans-serif;">Nombres de Estudiantes</h1>
    <?php if ($resultado->num_rows > 0): ?>
        <table>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>numero</th>
                <th>posicion</th>
                <th>equipo</th>
                <th>escuela</th>
            </tr>

            <?php while ($fila = $resultado->fetch_assoc()): ?>
            <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><?php echo $fila['Nombre']; ?></td> 
                <td><?php echo $fila['Apellido']; ?></td>
                <td><?php echo $fila['numero']; ?></td> 
                <td><?php echo $fila['posicion']; ?></td>
                <td><?php echo $fila['equipo']; ?></td>
                <td><?php echo $fila['escuela']; ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>No se encontraron los jugadores</p>
    <?php endif; ?>
</div>

        </div>

    </div>

</body>
</html>
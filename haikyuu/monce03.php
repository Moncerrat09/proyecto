<?php
    ob_start();
?>


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

        <h1 class="display-4 font" style="text-align: center; font-family: 'Feltpen', sans-serif;">nombres</h1>
        </div>

<div class="container1">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="formulario">

<label for="Nombre">Nombre: </label>
<input type="text" id="Nombre" name="Nombre" requiered>

<label for="Apellido">Apellido:</label>
<input type="text" id="Apellido" name="Apellido" requiered>

<label for="numero">numero:</label>
<input type="text" id="numero" name="numero" requiered>

<label for="posicion">posicion:</label>
<input type="text" id="posicion" name="posicion" requiered>

<label for="equipo">equipo:</label>
<input type="text" id="equipo" name="equipo" requiered>

<label for="escuela">escuela:</label>
<input type="text" id="escuela" name="escuela" requiered>

<input type="submit" value="Agregar fila ">

</form>

        <?php
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "haikyuu";

        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("Conexion Fallida: " . $conexion->connect_error);
        }

        function insertarnombre($conexion){

       if($_SERVER["REQUEST_METHOD"]=="POST") {

        var_dump($_POST);
        
        $Nombre = $conexion->real_escape_string($_POST ["Nombre"]);
        $apellido = $conexion->real_escape_string($_POST ["Apellido"]);
        $numero = $conexion->real_escape_string($_POST ["numero"]);
        $posicion = $conexion->real_escape_string($_POST ["posicion"]);
        $equipo = $conexion->real_escape_string($_POST ["equipo"]);
        $escuela = $conexion->real_escape_string($_POST ["escuela"]);

        $sql = "INSERT INTO nombres (Nombre, Apellido, numero, posicion, equipo, escuela) VALUES ('$Nombre', '$Aellido', '$numero',
        '$posicion', '$equipo', '$escuela')";
        if($conexion->query($sql)==TRUE){
            echo "<p class='success'>Nuevo nombre agregado con exito. </p>";

header("location: " . $_SERVER['PHP_SELF']);
exit();

        }else{
            echo "<p class='error'>error al egregar nombre:" . $conexion->error . "</p>";
        }
    }
} insertarnombre($conexion);
        
$sql = "SELECT * FROM personajes"; 
$resultado = $conexion->query($sql);

if($resultado->num_rows > 0) {
            echo "<table class='table table-bordered'>";
            echo "<tr><th>id</th><th>Nombre</th><th>Apellido</th><th>numero</th><th>posicion</th><th>equipo</th><th>escuela</th>
            </tr>";
            while($row = $resultado->fetch_assoc()){
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["Nombre"] . "</td><td>" . $row["Apellido"] . "</td><td>" . 
                 $row["numero"] . "</td><td>" . $row["posicion"] . "</td><td>" . $row["equipo"] . "</td><td>" . $row["escuela"] . "</td></tr>";
        }
        echo "</table>";
        }else {
            echo "No se encontaron registros en la base de datos";
        }
        $conexion->close();
        ?>
    </div>
</body>
</html>
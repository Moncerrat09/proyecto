<?php
error_reporting(E_ALL)
ini_set('display_error',1)
 $username = "root";
 $password = "";
 $servername = "localhost";
 $database = "mgt";
  $conexion = new mysqli($servername, $username, $password, $database);
    
  if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
      }
    
      if ($_SERVER["REQUEST_METHOD"] =="POST"){
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $id_categoria = $_POST["categoria"];

      $sql = "INSERT INTO productos (nombre, precio, id_categoria) VALUES
      ('$nombre', '$precio', 'id_categoria')";
      if ($conexion->query($sql)==TRUE){
        echo "<p style='color:green';> Producto agregado correctamente</p>";
      }else{
        echo "<p style='color:red';>Error: . $conexion->error . </p>";
      }
    }
    $sql_categorias = "SELECT * FROM categorias";
    $result_categorias = $conexion->query($sql_categorias);
?>

<html>
    <head>
        <title>Pagina alterna de prueba</title>
    <head>
    <body>
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
    
      <h1>Registrar Productos</h1>
      <form method = "POST">
        <label>Nombre del producto: </label>
        <input type="text" name="nombre" required><br><br>
        <label>Precio: </label>
        <input type="number" name="precio" required><br><br>
        <label>Categoria: </label>
        <select name ="categoria" requiered>
          <option value="">Seleccionar una categoria</option>
          <?php
          if($result_categorias->num_row> 0){
            while($row = $result_categorias->fetch_assoc()){
              echo "<option value='" . $row["id"] . "'>" . $row ["nombre"] . "</option>";
          }
        }
        ?>
        </select><br><br>

        <input type="submit" value="Agregar productos">
    </form>
    <h2>Lista de productos</h2>
    <table>
      <tr>
        <th>Nombre</th>
        <th>precio</th>
        <th>Categoria</th>
      </tr>
      <?php
      $sql_productos = "SELECT productos.nombre, productos.precio, categorias.nombre AS categoria FROM productos JOIN categorias ON productos.id_categoria = categoria.id";

      $result_productos = $conexion->query($sql_productos);
      if($result_productos-> num_rows>0){
        while($row= $result_productos -> fetch_assoc()){
          echo "<tr>
          <th>{$row¨['nombre']}</th>
          <th>{$row¨['precio']}</th>
          <th>{$row¨['categoria']}</th>

          </tr>";
        }    
      }else{
        echo "<tr><td>No hay productos registrados</td></tr>";
      }
      ?>
      </table>
  </body>
</html>
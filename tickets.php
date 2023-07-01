<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conferencia Bs As</title>
  <link rel="shortcut icon" href="./images/codoacodo.png" type="image/x-icon">
  <!-- CSS  -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
<!-- Header y nav -->
<?php include "nav.php";
  //Conexion y consulta a la DB
  include "conexionDB.php";
  $sql = "SELECT * FROM tickets";
  $consulta = mysqli_query($conexion, $sql);
?>

<div class="margen-top-nav container table-responsive alto-completo">
  <table class="table table-striped align-middle">
    <thead>
      <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>APELLIDO</th>
        <th>CORREO</th>
        <th>CANTIDAD</th>
        <th>TIPO</th>
      </tr>
    </thead>
    <tbody>
      <?php
        while ($registro = mysqli_fetch_assoc($consulta)) {
          echo "<tr>";
          echo '<th>'.$registro["id"].'</th>';
          echo '<td>'.$registro["nombre"].'</td>';
          echo '<td>'.$registro["apellido"].'</td>';
          echo '<td>'.$registro["correo"].'</td>';
          echo '<td>'.$registro["cantidad"].'</td>';
          echo '<td>'.$registro["tipo"].'</td>';
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>    
</div>



<?php include "footer.php"; ?>
<script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>
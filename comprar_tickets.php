<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coprar Tickets</title>
  <link rel="shortcut icon" href="./images/codoacodo.png" type="image/x-icon">
  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
  <!-- Header y nav -->
  <?php include "nav.php" ?>

  <!-- Tarjetas -->
  <div class="container margen-top-nav fs-5 fs-md-4 lh-1 text-center">
    <div class="row mx-3 mx-md-0">
      <div id="TarjetaEstudiante" class="col-12 col-md m-1 p-0 p-md-3 border border-primary seleccion">
        <h2 class="my-4 fw-medium">Estudiante</h2>
        <p class="my-4">Tiene un descuento</p>
        <p class="my-4 fw-medium">80%</p>
        <p class="d-none d-md-block my-4 texto-gris-simple">*presentar documentación</p>
      </div>
      <div id="TarjetaTrainee" class="col-12 col-md m-1 p-3 border border-info-subtle seleccion">
        <h2 class="my-4 fw-medium">Trainee</h2>
        <p class="my-4">Tiene un descuento</p>
        <p class="my-4 fw-medium">50%</p>
        <p class="d-none d-md-block my-4 texto-gris-simple">*presentar documentación</p>
      </div>
      <div id="TarjetaJunior" class="col-12 col-md m-1 p-3 border border-warning seleccion">
        <h2 class="my-4 fw-medium">Junior</h2>
        <p class="my-4">Tiene un descuento</p>
        <p class="my-4 fw-medium">15%</p>
        <p class="d-none d-md-block my-4 texto-gris-simple">*presentar documentación</p>
      </div>
    </div>
  </div>

  <!-- Formulario -->
  <a name="formulario"></a>
  <div class="contact_form container my-5">
    <p class="text-center fs-5">VENTA</p>
    <p class="text-center fs-1">VALOR DE TICKET $200</p>
    <form method="post" action="realizar_compra.php" class="mx-5 mx-md-0">
      <div class="row">
        <input type="text" name="nombre" placeholder="Nombre" id="Nombre" class="form-control col-12 col-md me-5 mb-3" required>
        <input type="text" name="apellido" placeholder="Apellido" id="Apellido" class="form-control col-12 col-md mb-3" required>
      </div>
      <div class="row">
        <input type="email" name="correo" placeholder="Correo" id="Correo" class="form-control col-12 mb-3" required>
      </div>
      <div class="row">
        <div class="col-12 col-md me-5 mb-3 p-0">
          <p>Cantidad</p>
          <input type="number" name="cantidad" placeholder="Cantidad" id="Cantidad" class="form-control" required>
          <p id="errorCantidad" class="text-danger ps-3 d-none">Ingrese una cantidad</p>
        </div>
        <div class="col-12 col-md mb-3 p-0">
          <p>Categoria</p>
          </datalist>
          <select id="Lista" name="tipo" class="form-select" aria-label="Default select example" required>
            <option selected>Categoria</option>
            <option value="1">General</option>
            <option value="2">Estudiante</option>
            <option value="3">Trainee</option>
            <option value="4">Junior</option>
          </select>
          <p id="errorCategoria" class="text-danger ps-3 d-none">Seleccione una categoria</p>
        </div>
      </div>
      <div class="row">
        <p class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">Total a Pagar: $ <span id="Total"></span></p>
      </div>
      <!-- Bortones -->
      <div class="row">
        <button id="Borrar" class="boton-enviar texto-blanco fs-4 col-12 col-md me-md-1 mb-3 mb-md-0">Borrar</button>
        <div id="Resumen" class="boton-enviar texto-blanco fs-4 col-12 col-md ms-md-1 text-center">Resumen</div>
      </div>
      <div class="row">
        <button type="submit" id="Comprar" class="boton-enviar texto-blanco fs-4 col-12 col-md me-md-1 mb-3 mb-md-0 mt-2">Comprar</button>
      </div>
    </form>
  </div class="contact_form">

  <!-- Footer -->
  <!-- Footer -->
  <?php include "footer.php" ?>
  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="./js/script2.js"></script>
</body>

</html>

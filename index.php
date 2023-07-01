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
  <?php include "nav.php" ?>

  <!-- Carrusel de imágenes -->
  <div class="oscurecer"></div>
  <div class="px-5 d-flex d-xl-none align-items-md-center justify-content-md-end texto-blanco texto-responsive overflow-x-auto">
    <div class="mt-5 py-5 w-100 fs-5 z-1">
      <p class="fs-2">Conf Bs As</p>
      <p>Bs As llega por primera vez a Argentina. Un eveto para compartir con nuestra comunidad el conocimiento y
        experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a miembros del evento, a
        otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti. Te esperamos!</p>
      <div class="botones mt-md-5">
        <button class="btn btn-outline-light my-3">Quiero ser orador</button>
        <a href="comprar_tickets.php"><button class="btn btn-success" href="comprar_tickets.php">Comprar tickets</button></a>
      </div>
    </div>
  </div>
  <div id="carouselExampleSlidesOnly" class="carousel slide d-none d-xl-block" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="d-none d-xl-block texto-blanco texto-carousel fs-5 margin-carousel">
        <p class="fs-3 fw-medium">Conf Bs As</p>
        <p>Bs As llega por primera vez a Argentina. Un eveto para compartir con nuestra comunidad el conocimiento y
          experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a miembros del evento, a
          otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti. Te esperamos!</p>
        <div class="botones position-relative start-50">
          <button class="btn btn-outline-light">Quiero ser orador</button>
          <button class="btn btn-success">Comprar tickets</button>
        </div>
      </div>
      <div class="carousel-item active contenedor-carousel-img">
        <img src="./images/ba1.jpg" class="d-block w-100" alt="Buenos Aires 1">
      </div>
      <div class="carousel-item contenedor-carousel-img">
        <img src="./images/ba2.jpg" class="d-block w-100" alt="Buenos Aires 2">
      </div>
      <div class="carousel-item contenedor-carousel-img">
        <img src="./images/ba3.jpg" class="d-block w-100" alt="Buenos Aires 3">
      </div>
    </div>
  </div>

  <!-- Sección oradores -->
  <a name="oradores"></a>
  <article class="container my-5">
    <p class="text-center">CONOCE A LOS</p>
    <p class="text-center fs-1">ORADORES</p>
    <div class="container d-flex flex-column flex-lg-row justify-content-lg-between">
      <div class="card m-3">
        <img src="./images/steve.jpg" alt="Steve Jobs">
        <div class="card-body">
          <div class="badge text-bg-warning">JavaScript</div>
          <div class="badge text-bg-info">React</div>
          <h3>Steve Jobs</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui quam voluptatibus voluptates adipisci
            blanditiis
            impedit maiores reiciendis eos et. Dolores animi ipsam odio nemo commodi, soluta facilis vel iste ab
            corporis
            ratione. Id cumque nobis molestiae voluptatem molestias ex, tempora esse voluptate.
          </p>
        </div>
      </div>
      <div class="card m-3">
        <img src="./images/bill.jpg" alt="Bill Gates">
        <div class="card-body">
          <div class="badge text-bg-warning">JavaScript</div>
          <div class="badge text-bg-info">React</div>
          <h3>Bill Gates</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui quam voluptatibus voluptates adipisci
            blanditiis
            impedit maiores reiciendis eos et. Dolores animi ipsam odio nemo commodi, soluta facilis vel iste ab
            corporis
            ratione. Id cumque nobis molestiae voluptatem molestias ex, tempora esse voluptate.
          </p>
        </div>
      </div>
      <div class="card m-3">
        <img src="./images/ada.jpeg" alt="Ada Lovelace">
        <div class="card-body">
          <div class="badge text-bg-secondary">Negocios</div>
          <div class="badge text-bg-danger">Startups</div>
          <h3>Ada Lovelace</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui quam voluptatibus voluptates adipisci
            blanditiis
            impedit maiores reiciendis eos et. Dolores animi ipsam odio nemo commodi, soluta facilis vel iste ab
            corporis
            ratione. Id cumque nobis molestiae voluptatem molestias ex, tempora esse voluptate.
          </p>
        </div>
      </div>
    </div>
  </article>

  <!-- Lufar y fecha -->
  <a name="lugar"></a>
  <article class="container-fluid">
    <section class="row">
      <img src="./images/honolulu.jpg" alt="imagen playa" class="col-12 col-md-6 p-0">
      <div class="col-12 col-md-6 fondo-gris texto-blanco p-3">
        <h2 class="fs-1">Bs As - Octubre</h2>
        <p class="fs-6 lh-lg">Buenos Aires es la provincia y localidad más grande del estado de Argentina, en los
          Estados Unidos. Honolulu es
          la más sureña de entre las principales ciudades estadounidenses. Aunque el nombre de Honolulu se refiere al
          área
          urbana en la costa sureste se la isla de Oahu, la ciudad y el condado de Honolulu han formado una
          ciudad-condado
          consolidada que cubre toda la ciudad (aproximadamente 600 km<sup>2</sup> de superficie).</p>
        <button class="btn btn-outline-light">Conocé más</button>
      </div>
    </section>
  </article>

  <!-- Formulario -->
  <a name="formulario"></a>
  <div class="contact_form container my-5">
    <p class="text-center">CONVIÉRTETE EN UN</p>
    <p class="text-center fs-1">ORADOR</p>
    <p class="text-center fs-5">Anótate como orador para dar una <span><abbr title="El formato Ignite consiste en una presentación de la idea central de un proyecto o visión en cinco minutos.">charla ignite</abbr></span>.
      Cuéntanos de qué quieres hablar!</p>
    <form>
      <div class="row mx-5">
        <input type="text" name="name" placeholder="Nombre" class="form-control col-12 col-md me-5 mb-3">
        <input type="text" name="surname" placeholder="Apellido" class="form-control col-12 col-md mb-3">
      </div>
      <div class="row mx-5">
        <textarea name="comment" cols="30" rows="10" placeholder="Sobre qué quieres hablar?"
          class="form-control"></textarea>
      </div>
      <div class="col mx-5">
        <p class="form-text">Recuerda incluir un título para tu charla</p>
      </div>
      <div class="row mx-5">
        <button type="submit" class="boton-enviar texto-blanco fs-4">Enviar</button>
      </div>
    </form>
  </div class="contact_form">

  <!-- Footer -->
  <?php include "footer.php" ?>
  <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>
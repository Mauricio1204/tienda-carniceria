<?php 
SESSION_START();
// inicio sesion star 

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/cssPAGPRIN.css">
  <title>Pagina prinsipal</title>
  <!-- fuentes de imagesnes y tipografias del envaezado -->
  <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">
  <!--termino fuentes de imagesnes y tipografias del envaezado -->
</head>
<body>
  <!-- CONTENIDO -->
  <div class="comtainer">
    <div class="row">
      <!-- ENCAVEZADO -->
      <header id="ENCAVEZADO" class="p-2 bg-dark text-white">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="20" height="20" role="img" aria-label="Oreja">
                <use xlink:href="#bootstrap"></use>
              </svg>
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="pagiona_prinsipal.html" class="nav-link px-2 text-secondary">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Pinsipal</font>
                  </font>
                </a></li>
              <li><a href="#" class="nav-link px-2 text-white">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Pollo</font>
                  </font>
                </a></li>
              <li><a href="#" class="nav-link px-2 text-white">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Cerdo</font>
                  </font>
                </a></li>
              <li><a href="#" class="nav-link px-2 text-white">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Res</font>
                  </font>
                </a></li>
              <li><a href="#" class="nav-link px-2 text-white">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">pezcados</font>
                  </font>
                </a></li>
            </ul>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
              <input type="search" class="form-control form-control-dark" placeholder="Búsqueda..."
                aria-label="Búsqueda">
            </form>
            <div class="text-end">

              <a  class="btn btn-outline-success" 
              style="vertical-align: inherit " href="registro.html"
              role="button">
              <font style="vertical-align: inherit;">registrarme</font> </a>
              <a  class="btn btn-outline-success" 
              style="vertical-align: inherit " href="inicio_de_secion.php"
              role="button">
                <font style="vertical-align: inherit;">iniciar cesion</font> </a>
              
         
              <a  class="btn btn-outline-danger" 
              style="vertical-align: inherit " href="salir.php"
              role="button">
                <font style="vertical-align: inherit;">salir</font> </a>
             
              
            </div>
          </div>
        </div>
      </header>
      <!-- TERMINO DE ENCAVEZADO -->
     
      <!--INICIO RIEL DE IMAGENES -->
      <div class="carrusel">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="IMG/corte 4.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="IMG/corte 1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="IMG/pieza 3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        
        <br>
        <br>
        <br>
      </div>
      <br>
      <br>
      <br>
      <!-- TERMINO RIEL DE IMAGENES -->
      <br>
      <br>
      <br>
      <!-- LISTA DE FILTROS -->
    
      <!-- <div class="row text-center">
        <h1 id="h1">Lo mejor de la carne en un solo sitio</h1>
      </div>
      <br>
      <br>
      <div class="filtros">
        <div class=" list-group" role="tablist">
          <label class="list-group-item list-group-item-action active">
            <input class="" type="hidden" value="">
            ofertas
          </label>
          <label class="list-group-item">
            <input class="form-check-input me-1" type="checkbox" value="">
            lo mas comprado
          </label>
          <label class="list-group-item">
            <input class="form-check-input me-1" type="checkbox" value="">
            carne para parrilladas
          </label>
          <label class="list-group-item">
            <input class="form-check-input me-1" type="checkbox" value="">
            resetas
          </label>
        </div> -->
             <!-- FIN DE LISTA DE FILTROS -->
      </div>
      <!-- inicio de cart para los productos -->

      <div class="row row-cols-4 row-cols-md-3 g-4">
        <br>
        <br>
        <br>
        <div class="col">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>





      <!-- fin de cart para los productos -->
     






      <!-- <div class="corte3">
        <img src="img/pieza 1.jpg" alt="">
        <div class="descripcion3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni, quia tenetur tempora
          qui quo sequi, enim ratione repellendus numquam minima repudiandae cupiditate iste nulla facere minus facilis
          in maxime dolores!</div>
          inicio de mensaje mensaje 
          <button id="cargar">cargar resetas
            <div id="datos"></div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
               <script src="petisiones.js"></script>
          </button>
          termino de mensaje
      </div> -->
    </div>
  </div>
  <!-- elementos de java scrip para los diseños -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
  <!-- temino de elementos para js -->
</body>
</html>
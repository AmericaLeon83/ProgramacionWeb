<?php
include __DIR__ . '/admin/marca.class.php';
include __DIR__ . '/header.php';
$webMarcas = new Marca();
$marcas = array();
$marcas = $webMarcas->getAll();
?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<!-- Carrusel con imágenes más grandes -->
<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banner1.png" class="d-block w-100" style="height: 65vh;" alt="Imagen 1">
      <div class="container">
        <div class="carousel-caption text-start" style="font-family: 'Garamond', serif; background-color: rgba(0, 0, 0, 0.5); padding: 20px;">
        
        <p style="font-size: 1.2rem; color: white;">Intercambia tu tiempo y transforma vidas.</p>
        </div>
      </div>
    </div>
    
    <div class="carousel-item">
      <img src="images/carrito11.png" class="d-block w-100" style="height: 65vh;" alt="Imagen 2">
      <div class="container">
        <div class="carousel-caption text-start" style="font-family: 'Garamond', serif; background-color: rgba(0, 0, 0, 0.5); padding: 20px;">
          <h1 style="font-size: 2.5rem; color: white; font-weight: bold;">Contribuye a tu Comunidad</h1>
          <p style="font-size: 1.2rem; color: white;">Comparte tu tiempo, tus habilidades y tus conocimientos.</p>
        </div>
      </div>
    </div>
    
    <div class="carousel-item">
      <img src="images/carrito2.png" class="d-block w-100" style="height: 65vh;" alt="Imagen 3">
      <div class="container">
        <div class="carousel-caption text-start" style="font-family: 'Garamond', serif; background-color: rgba(0, 0, 0, 0.5); padding: 20px;">
          <h1 style="font-size: 2.5rem; color: white; font-weight: bold;">Fortaleciendo Redes Comunitarias</h1>
          <p style="font-size: 1.2rem; color: white;">Un espacio de intercambio de habilidades y conocimiento.</p>
        </div>
      </div>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- Texto introductorio con diseño ajustado -->
<div class="container text-center" style="margin-top: 50px;">
  <h1 style="font-family: 'Montserrat', sans-serif; font-size: 3.5rem; color: #004d40; font-weight: bold;">Banco De Tiempo Para el Voluntariado Solidario</h1>
  <p style="font-size: 1.8rem; color: #555; font-style: italic;">"Creando espacios para el intercambio de habilidades y conocimientos a través del voluntariado solidario".</p>
</div>

<!-- Beneficios para voluntarios -->
<div class="container marketing" style="margin-top: 70px;">
  <h2 style="font-family: 'Garamond', serif; font-size: 2.8rem; color: #004d40; text-align: center; font-weight: bold;">Beneficios para Voluntarios</h2>
  <ul style="font-size: 1.5rem; color: #555; margin-top: 30px; line-height: 1.8;">
    <li><strong>Crédito complementario:</strong> Al cumplir con las tareas asignadas en cada proyecto.</li>
    <li><strong>Horas de servicio social:</strong> Para alumnos con el 70% de sus créditos acumulados.</li>
  </ul>
</div>

<!-- Objetivos del proyecto -->
<div class="container" style="margin-top: 70px;">
  <h2 style="font-family: 'Garamond', serif; font-size: 2.8rem; color: #004d40; text-align: center; font-weight: bold;">Objetivos del Banco de Tiempo</h2>
  <p style="font-size: 1.5rem; color: #555; margin-top: 30px; line-height: 1.8; text-align: justify;">Nuestro objetivo es crear un espacio en el que la comunidad pueda intercambiar habilidades y conocimiento, fortaleciendo los lazos sociales y promoviendo la colaboración entre personas con diversos talentos.</p>
</div>

<!-- Nuestras Campanas -->
<div class="container" style="margin-top: 70px;">
  <h2 style="font-family: 'Garamond', serif; font-size: 2.8rem; color: #004d40; text-align: center; font-weight: bold;">Nuestros Voluntariados Disponibles Son</h2>
</div>


<!-- FILA DE CÍRCULOS -->      
<div class="container marketing">
  <div class="row justify-content-center">
    <div class="col-lg-2">
      <a href="reciclaje.php">
        <img src="images/resiclaje.png" class="bd-placeholder-img rounded-circle mx-auto d-block" width="250" height="250" aria-label="Placeholder" alt="Campaña de Reciclaje">
      </a>
      <h4 class="fw-normal text-center">Reciclaje y Reducción de Residuos</h4>
    </div>
    <div class="col-lg-2">
      <a href="salud_mental.php">
        <img src="images/vandalismo.png" class="bd-placeholder-img rounded-circle mx-auto d-block" width="250" height="250" aria-label="Placeholder" alt="Campaña de Salud Mental">
      </a>
      <h4 class="fw-normal text-center">Campaña Anti Vandalismor</h4>
    </div>
    <div class="col-lg-2">
      <a href="voluntariado.php">
        <img src="images/Bullying.png" class="bd-placeholder-img rounded-circle mx-auto d-block" width="250" height="250" aria-label="Placeholder" alt="Voluntariado Comunitario">
      </a>
      <h4 class="fw-normal text-center">Campaña Anti Bullying</h4>
    </div>
    <div class="col-lg-2">
      <a href="inclusion.php">
        <img src="images/graffiti.png" class="bd-placeholder-img rounded-circle mx-auto d-block" width="250" height="250" aria-label="Placeholder" alt="Campaña de Inclusión y Diversidad">
      </a>
      <h4 class="fw-normal text-center">Campaña Anti Grafiti</h4>
    </div>
    <div class="col-lg-2">
      <a href="deporte.php">
        <img src="images/feriadelasalud.png" class="bd-placeholder-img rounded-circle mx-auto d-block" width="250" height="250" aria-label="Placeholder" alt="Campaña de Deporte y Actividad Física">
      </a>
      <h4 class="fw-normal text-center">Feria de la Salud</h4>
    </div>
  </div>
</div>

<main class="container">
  <div class="custom-content">
    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
      <div class="row">
        <div class="col-lg-6 px-0">
          <h1 class="display-4 fst-italic">Nuestras Principales Campañas</h1>
          <p class="lead my-3">Conoce nuestras iniciativas en el campus para mejorar la convivencia y el entorno estudiantil.</p>
        </div>
        
        <!-- Imagen alineada a la derecha -->
        <div class="col-lg-6 d-flex justify-content-end">
          <img src="images/tec1.png" class="img-fluid" alt="Campañas del campus" style="max-width: 100%; height: auto;">
        </div>
      </div>
    </div>

    
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary-emphasis">Campaña Anti Vandalismo</strong>
            <h3 class="mb-0">Cuidemos Nuestro Espacio</h3>
            <p class="card-text mb-auto">Concientización para cuidar el mobiliario del campus y prevenir el vandalismo.</p>
            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                    Continue reading
                    <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                  </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img src="images/van1.png" class="bd-placeholder-img" width="300" height="300" alt="Thumbnail">
                </div>
              </div>
              </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success-emphasis">Campaña Anti Grafiti</strong>
            <h3 class="mb-0">Espacios Libres de Grafiti</h3>
            <p class="card-text mb-auto">Promoción de espacios limpios y cuidados en áreas comunes del campus.</p>
            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                    Continue reading
                    <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                  </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img src="images/g1.png" class="bd-placeholder-img" width="300" height="300" alt="Thumbnail">
                </div>
              </div>
              </div>
    </div>

    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-danger-emphasis">Campaña Anti Bullying</strong>
            <h3 class="mb-0">Fomentemos el Respeto</h3>
            <p class="card-text mb-auto">Iniciativa para fomentar la convivencia pacífica y el respeto entre los estudiantes.</p>
            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                    Continue reading
                    <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                  </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img src="images/campanaB.png" class="bd-placeholder-img" width="300" height="300" alt="Thumbnail">
                </div>
              </div>
              </div>

      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-warning-emphasis">Feria de la Salud</strong>
            <h3 class="mb-0">Cuidemos Nuestra Salud</h3>
            <p class="card-text mb-auto">Participación en la feria de salud organizada por el Instituto Tecnológico de Celaya.</p>
            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                    Continue reading
                    <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                  </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img src="images/feriaDSalud.png" class="bd-placeholder-img" width="300" height="300" alt="Thumbnail">
                </div>
              </div>
              </div>
    </div>
  </div>
</main>


  <!-- IMAGEN PUBLICIDAD -->
  <div class="row justify-content-center mt-5">
    <div class="col-lg-6">
      <a href="productos.php">
        <img src="images/an1.png" class="img-fluid mx-auto my-auto" style="width: 100%; height: auto; max-width: 1800px; max-height: 1400px;" alt="Imagen publicitaria">
      </a>
    </div>
  </div>

  <!-- IMAGEN PUBLICIDAD -->
  <div class="row justify-content-center mt-5">
    <div class="col-lg-6">
      <a href="productos.php">
        <img src="images/an2.png" class="img-fluid mx-auto my-auto" style="width: 100%; height: auto; max-width: 1800px; max-height: 1400px;" alt="Imagen publicitaria">
      </a>
    </div>
  </div>


<div class="container marketing">
 

<hr class="featurette-divider">
<h3 class="animated-title" style="color: #900d78;">Banco de Tiempo</h3>
<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading fw-normal lh-1">Intercambio de Habilidades<span class="text-body-secondary"></span></h2>
    <p class="lead">El Banco de Tiempo es una iniciativa que te permite intercambiar tus habilidades y conocimientos con otros miembros de la comunidad. Aquí, el tiempo es la moneda, y cada hora de ayuda que ofreces te permite recibir una hora de ayuda en algo que necesites.</p>
  </div>
  <div class="col-md-5">
    <img src="images/i1.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" role="img" aria-label="Placeholder: 500x500" alt="Intercambio de Habilidades">
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading fw-normal lh-1">Construcción de Comunidad<span class="text-body-secondary"></span></h2>
    <p class="lead">El Banco de Tiempo fomenta la construcción de una comunidad más unida y solidaria. Al participar, no solo intercambias servicios, sino que también fortaleces los lazos sociales y contribuyes a un entorno de colaboración y apoyo mutuo.</p>
  </div>
  <div class="col-md-5 order-md-1">
    <img src="images/i2.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" role="img" aria-label="Placeholder: 500x500" alt="Construcción de Comunidad">
  </div>
</div>
<hr class="featurette-divider">


 <!--INICIO CONTACTOS --> 
<script src="//assets.jumpseller.com/public/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://assets.jumpseller.com/store/bootstrap/themes/607236/color_pickers.min.css?1687821175"/>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JBWEC7QQTS"></script>
<script src="https://files.jumpseller.com/javascripts/dist/jumpseller-2.0.0.js" defer="defer"></script>
<!-- FIN META -->
<div id='top_components'><div id='component-1408630' class='theme-component show' >
  
    <section class="container">
      <div class="row">
        <section class="col-12 d-none d-md-block">
          <ol class="breadcrumb">
              
                <li class="breadcrumb-item">
                  <a href="/" class="trsn" title="Go back to Home">Home</a>
                </li>
               
                <li class="breadcrumb-item">
                  <span>Contact</span>
                </li>
              
            
          </ol>
        </section>
      </div>
    </section>
  
  
  <style>
    .navbar-dark, .navbar-dark .dropdown-menu {background:rgba(52,58,64,1);}
    .navbar-dark .nav-link, .navbar-dark .social a {color:#FDFDFD !important;}
    .navbar-dark li:hover {background:color-mix(in srgb, rgba(52,58,64,1) 90%, #f1f1f1);}
    .navbar-light, .navbar-light .dropdown-menu {background:rgba(248,249,250,1);}
    .navbar-light li:hover {background:color-mix(in srgb, rgba(248,249,250,1) 90%, #090909);}
    .navbar-light .navbar-brand > h1, .navbar-light .navbar-brand > .text-logo, .navbar-light .nav-link, .navbar-light .navbar-collapse .social a {color:#010101 !important;}
    .navbar-light .navbar-toggler {border-color: color-mix(in srgb, rgba(248,249,250,1) 80%, #090909); color: color-mix(in srgb, rgba(248,249,250,1) 10%, #090909) }
  </style></div></div>
  
 
    <!--   CONTACTOS  -->
    <style>
    .contact-section {
        background-color: #f9f9f9; 
        padding: 40px; 
        border-radius: 10px; 
    }

    .contact-section h2 {
        color: #333; 
        margin-bottom: 20px;
    }

    .contact-form {
        margin-bottom: 30px; 
    }

    .contact-form label {
        font-weight: bold; 
    }

    .contact-form input[type="text"],
    .contact-form input[type="email"],
    .contact-form input[type="tel"],
    .contact-form textarea {
        width: 100%; 
        padding: 10px; 
        margin-bottom: 10px; 
        border-radius: 5px;
        border: 1px solid #ccc; 
    }

    .contact-form textarea {
        height: 100px; 
    }

    .contact-form .actions {
        text-align: right; 
    }

    .contact-form .button {
        padding: 10px 20px; 
        background-color: #007bff; 
        color: #fff; 
        border: none; 
        border-radius: 5px; 
        cursor: pointer;
    }

    .contact-form .button:hover {
        background-color: #0056b3; 
    }

    .contact-info li {
        margin-bottom: 10px; 
    }

    .contact-info li i {
        margin-right: 10px; 
    }

    .contact-info li a {
        color: #007bff; 
    }

    .contact-info li a:hover {
        color: #0056b3; 
    }
</style>


<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="page-header">Contactanos</h1>
        </div>
    </div>
    <div class="row justify-content-center contact-section">
        <section class="mb-3 col-md-6 contact-form">
            <h2>CONTACTATE CON NOSOTROS</h2>
            <p>Si tienes alguna duda puedes contactarte con nuestros distribuidores.</p>
            <form id="contact_form" action="/contact/send" accept-charset="UTF-8" method="post">
                <input type="hidden" name="authenticity_token" value="q_vrrlK-Aw9bW--JkCKKcji2FCgjWKD6zhd62U26cJTCL18szxZXSS_5MZIz5swNoIWNa6BG3WVGNhf-z0dUrQ" autocomplete="off">
                <div id="contactpage">
                    <div id="contactpage_email" class="field">
                        <label for="email" class="required">E-mail <em>*</em></label><br>
                        <input class="text" required="required" autocomplete="email" type="email" name="contact[email]" id="contact_email">
                    </div>
                    <div id="contactpage_name" class="field">
                        <label for="contactpage_name" class="required">Nombre <em>*</em></label><br>
                        <input class="text" required="required" autocomplete="name" type="text" name="contact[name]" id="contact_name">
                    </div>
                    <div id="contactpage_phone" class="field">
                        <label for="contactpage_phone">Telefono</label><br>
                        <input class="text" autocomplete="tel" type="tel" name="contact[phone]" id="contact_phone">
                    </div>
                    <div id="contactpage_message">
                        <label for="contactpage_message" class="required">Mensaje <em>*</em></label><br>
                        <textarea class="text" style="height:10em;" required="required" name="contact[message]" id="contact_message"></textarea>
                    </div>
                    <p class="required">* Required Fields</p>
                    <div style="text-align:right;" class="actions">
                        <input type="submit" name="commit" value="Submit" id="submit_contact" class="button" data-disable-with="Submit">
                    </div>
                </div>
                <div id="captcha_fd96576d025fdd8b3153b79e177efb27" class="h-captcha" data-size="invisible"></div>
                <script src="https://js.hcaptcha.com/1/api.js?render=explicit" async></script>
                <script>
                    window.addEventListener("load", () => {
                        const form = document.getElementById('captcha_fd96576d025fdd8b3153b79e177efb27').closest("form");

                        function challengeBeforeSubmit(submitEvent) {
                            submitEvent.preventDefault();

                            return hcaptcha.execute({ async: true }).then(handleCaptchaResponse).catch(err => {
                                console.error(err);
                            });
                        }

                        function handleCaptchaResponse() {
                            const detail = { captcha_id: 'captcha_fd96576d025fdd8b3153b79e177efb27' };
                            const uncancelled = form.dispatchEvent(new Event("jumpseller-captcha-validated", { cancelable: true, detail }));
                            if (uncancelled) form.submit();
                        }

                        hcaptcha.render('captcha_fd96576d025fdd8b3153b79e177efb27', {
                            sitekey: "3bce8b88-f3b0-479b-b984-078c51d2a80f",
                        });

                        form.addEventListener('submit', challengeBeforeSubmit);
                    });
                </script>
                <script>
                    function onSubmitContact(token) {
                        document.getElementById("contact_form").submit();
                    }
                </script>
            </form>
        </section>
        <section class="col-md-6">
            <h2>Informacion de Contacto</h2>
            <ul class="contact-info" id="contact-list">
                <li>
                    <i class="fas fa-phone"></i>
                    <a href="tel:+1123123123">+1 123 123 123</a>
                </li>
            </ul>
        </section>
    </div>
</div>
        </div>
      
    <?php include 'footer.php'; ?>

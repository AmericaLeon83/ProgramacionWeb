<?php include 'header.php'; ?>   
<!-- Carrusel -->
<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/hombre/hombreanuncio.png" class="d-block w-100" alt="Imagen 1">
      <div class="container">
        <div class="carousel-caption text-start" style="font-family: 'Garamond', serif;">
        </div>
      </div>
    </div>  
  </div>
</div>
<!-- Fin del Carrusel -->
<style>
    .page-header {
      font-size: 1.5rem; /* Tamaño de la fuente */
      font-weight: bold; /* Negrita */
      color: #333; /* Color del texto */
      text-transform: uppercase; /* Transformar a mayúsculas */
      letter-spacing: 2px; /* Espaciado entre letras */
      margin-bottom: 30px; /* Margen inferior */
    }
  
    .product-block h4 a {
      font-size: 1.2rem; /* Tamaño de la fuente */
      font-weight: bold; /* Negrita */
      color: #333; /* Color del texto */
    }
  
    .price-mob {
      font-size: 1.1rem; /* Tamaño de la fuente */
      font-weight: bold; /* Negrita */
      color: #333; /* Color del texto */
    }
  </style>
  <!-- IMAGEN PUBLICIDAD -->
  <div class="row justify-content-center mt-5">
    <div class="col-lg-6">
      <a href="tu_enlace.html">
        <img src="images/mujer/anuncioM.png" class="img-fluid mx-auto my-auto" style="width: 100%; height: auto; max-width: 1800px; max-height: 1400px;" alt="Imagen publicitaria">
      </a>
    </div>
  </div>
  <!-- Product section-->
  <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="images/hombre/luzazul.png" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">SKU: BST-498</div>
                        <h1 class="display-5 fw-bolder">Lentes de Bloqueo de Luz Azul</h1>
                        <div class="fs-5 mb-5">
                            <span>Protegen sus ojos de la luz azul dañina</span>
                        </div>
                        <p class="lead">Brindan la máxima comodidad durante el tiempo prolongado de pantalla, minimizan el dolor de cabeza y promueven un ciclo de sueño más saludable.</p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6 order-md-2"> <!-- Cambio de orden de las columnas -->
                <img class="card-img-top mb-5 mb-md-0" src="images/hombre/fotocromaticos.png" alt="..." />
            </div>
            <div class="col-md-6 order-md-1"> <!-- Cambio de orden de las columnas -->
                <div class="small mb-1">SKU: BST-498</div>
                <h1 class="display-5 fw-bolder">Lentes Fotocromáticos </h1>
                <div class="fs-5 mb-5">
                    <span>Son innegablemente convenientes </span>
                </div>
                <p class="lead">Se adaptan a la luz solar, claros en interiores y oscuros al exterior. Puede usarse como lentes graduados y lentes de sol con protección UV</p>
                <div class="d-flex">
                    <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                    <button class="btn btn-outline-dark flex-shrink-0" type="button">
                        <i class="bi-cart-fill me-1"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="images/hombre/aaa.png" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">SKU: BST-498</div>
                        <h3 class="display-5 fw-bolder">Lentes Progresivos</h3>
                        <div class="fs-5 mb-5">
                            <span>Visión booster para todas las distancias</span>
                        </div>
                        <p class="lead">No más lentes de conmutación: Vea todo el mundo claramente de una manera perfecta, desde lejos a intermedio y cerca.</p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>


         <!--##### SELECCION DE MODELOS ######-->
<style>
    .product-image {
        max-width: 230%; /* Ajuste del ancho máximo de las imágenes */
        height: auto;
    }
</style>
<div class="container">
    <!-- Latest Products -->
    <div class="row justify-content-between">
    <div class="col-md-1 col-4 mb-3"> <!-- Cambio de col-md-auto a col-md-1 -->
    <div class="product-block" data-productid="3514295">
        <a href="#lentes_aviador"> <!-- Anchor para la primera imagen -->
            <img class="product-image" src="images/armazones/CLIC_AVIADOR.png" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
        </a>
        <div class="caption text-left">
            <div class="d-flex product-list-rating-container"></div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
        <!-- Repite el mismo patrón para cada imagen -->
        <div class="col-md-1 col-4 mb-3"> <!-- Cambio de col-md-auto a col-md-1 -->
            <div class="product-block" data-productid="3514295">
            <a href="#lentes_corazon"> <!-- Anchor para la primera imagen -->
                    <img class="product-image" src="images/armazones/CORAZON_CLIC.png" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
                </a>
                <div class="caption text-left">
                    <div class="d-flex product-list-rating-container"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- Repite el mismo patrón para cada imagen -->
        <div class="col-md-1 col-4 mb-3"> <!-- Cambio de col-md-auto a col-md-1 -->
            <div class="product-block" data-productid="3514295">
            <a href="#lentes_cuadrados"> <!-- Anchor para la primera imagen -->
                    <img class="product-image" src="images/armazones/CUADRADO_CLIC.png" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
                </a>
                <div class="caption text-left">
                    <div class="d-flex product-list-rating-container"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- Repite el mismo patrón para cada imagen -->
        <div class="col-md-1 col-4 mb-3"> <!-- Cambio de col-md-auto a col-md-1 -->
            <div class="product-block" data-productid="3514295">
            <a href="#lentes_gato"> <!-- Anchor para la primera imagen -->
                    <img class="product-image" src="images/armazones/GATO_CLIC.png" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
                </a>
                <div class="caption text-left">
                    <div class="d-flex product-list-rating-container"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <!-- Repite el mismo patrón para cada imagen -->
        <div class="col-md-1 col-4 mb-3"> <!-- Cambio de col-md-auto a col-md-1 -->
            <div class="product-block" data-productid="3514295">
            <a href="#lentes_cuadrados"> <!-- Anchor para la primera imagen -->
                    <img class="product-image" src="images/armazones/MASVENDIDOS.png" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
                </a>
                <div class="caption text-left">
                    <div class="d-flex product-list-rating-container"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- Repite el mismo patrón para cada imagen -->
        <div class="col-md-1 col-4 mb-3"> <!-- Cambio de col-md-auto a col-md-1 -->
            <div class="product-block" data-productid="3514295">
            <a href="#lentes_cuadrados"> <!-- Anchor para la primera imagen -->
                    <img class="product-image" src="images/armazones/OFERTAS_CLIC.png" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
                </a>
                <div class="caption text-left">
                    <div class="d-flex product-list-rating-container"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div><!-- /.row -->
</div><!-- /.container -->
</div><div id='component-1408626' class='theme-component show' ><div id="banners-1408626" class="container">

        <!--||||||LENTES CUADRADOS|||||-->
        <div id="lentes_cuadrados" class="row"> <!-- ID cambiado para que coincida con el enlace -->
    <div class="col-md-12">
    </div>
</div>
    <div class="container">
  <!-- Latest Products -->
  <div class="row">
  <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/cuadrados1.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S985x</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/cuadrados2.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S11071X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/cuadrados3.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/cuadrados4.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
  <!-- Agrega un salto de columna -->
  <div class="row">
  <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/cuadrado5.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S985x</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/cuadrado6.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S11071X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/cuadrado7.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/cuadrado8.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
</div><!-- /.container -->
</div><div id='component-1408626' class='theme-component show' ><div id="banners-1408626" class="container">

    <!--~~~~~~~~~~FIN DE LENTES CUADRADOS~~~~~~~~~~~~-->
        <!--||||||LENTES CORAZON|||||-->
        <div id="lentes_corazon" class="row"> <!-- ID cambiado para que coincida con el enlace -->
    <div class="col-md-12">
    </div>
    </div>
    <div class="container">
  <!-- Latest Products -->
  <div class="row">
  <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/corazon1.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S985x</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/corazon2.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S11071X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/corazon3.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/corazon4.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
  <!-- Agrega un salto de columna -->
  <div class="row">
  <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/corazon5.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S985x</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/corazon6.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S11071X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/corazon7.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/corazon8.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
</div><!-- /.container -->
</div><div id='component-1408626' class='theme-component show' ><div id="banners-1408626" class="container">

    <!--~~~~~~~~~~FIN DE LENTES CORAZON~~~~~~~~~~~~-->
    <!--|||||LENTES CUERNO|||||||-->

    <div class="container">
  <!-- Latest Products -->
  <div class="row">
  <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/cuerno1.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S985x</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/cuerno2.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S11071X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/cuerno3.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/cuerno4.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
  <!-- Agrega un salto de columna -->
  <div class="row">
  <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/cuerno5.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S985x</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/cuerno6.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S11071X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/cuerno7.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/cuerno8.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
</div><!-- /.container -->
</div><div id='component-1408626' class='theme-component show' ><div id="banners-1408626" class="container">

    <!--~~~~~~~~~~FIN DE LENTES CUERNO~~~~~~~~~~~~-->
     <!--|||||||LENTES OJO DE GATO|||||||-->
     <div id="lentes_gato" class="row"> <!-- ID cambiado para que coincida con el enlace -->
    <div class="col-md-12">
    </div>
     </div>
    <div class="container">
  <!-- Latest Products -->
  <div class="row">
  <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/gato1.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S985x</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/gato2.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S11071X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/gato3.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/gato4.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
  <!-- Agrega un salto de columna -->
  <div class="row">
  <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/gato5.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S985x</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/gato6.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S11071X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/gato7.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/gato8.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
</div><!-- /.container -->
</div><div id='component-1408626' class='theme-component show' ><div id="banners-1408626" class="container">

    <!--~~~~~~~~~~FIN DE LENTES OJO DE GATO~~~~~~~~~~~~-->
    <!--|||||||LENTES POLIGONO||||||||-->

    <div class="container">
  <!-- Latest Products -->
  <div class="row">
  <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/poligono1.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S985x</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/poligono2.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S11071X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/poligono3.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/poligono4.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
  <!-- Agrega un salto de columna -->
  <div class="row">
  <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/poligono5.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S985x</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/poligono6.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S11071X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/poligono7.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/poligono8.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
</div><!-- /.container -->
</div><div id='component-1408626' class='theme-component show' ><div id="banners-1408626" class="container">

    <!--~~~~~~~~~~FIN DE LENTES POLIGONO~~~~~~~~~~~~-->
     <!--|||||LENTES REDONDO|||||||-->

    <div class="container">
  <!-- Latest Products -->
  <div class="row">
  <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/redondo1.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S985x</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/redondo2.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S11071X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/redondo3.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/redondo4.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
  <!-- Agrega un salto de columna -->
  <div class="row">
  <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/redondo5.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S985x</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/redondo6.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S11071X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/redondo7.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/redondo8.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
</div><!-- /.container -->
</div><div id='component-1408626' class='theme-component show' ><div id="banners-1408626" class="container">

    <!--~~~~~~~~~~FIN DE LENTES REDONDO~~~~~~~~~~~~-->
    <!--||||||||LENTES AVIADOR|||||||-->
    <div id="lentes_aviador" class="row"> <!-- ID cambiado para que coincida con el enlace -->
    <div class="col-md-12">
    </div>
    </div>
    <div class="container">
  <!-- Latest Products -->
  <div class="row">
  <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/aviador1.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S985x</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/aviador2.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S11071X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/aviador3.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/aviador4.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
  <!-- Agrega un salto de columna -->
  <div class="row">
  <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/aviador5.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S985x</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/aviador6.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S11071X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/aviador7.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="product-block" data-productid="3514295">
          <a href="/camara-nikon-reflex-d7200-lente-18-140">
            <img class="w-100 mb-3" src="images/armazones/aviador8.png" style="max-width: 1200px; max-height: 1200px;" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>
          <div class="caption text-left">
            <h4><a href="/camara-nikon-reflex-d7200-lente-18-140">Modelo: S37465X</a></h4>
            <div class="d-flex product-list-rating-container"></div>
            <div class="price-mob mb-2">$199.99</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
</div><!-- /.container -->
</div><div id='component-1408626' class='theme-component show' ><div id="banners-1408626" class="container">

<div class="row justify-content-center mt-5">
    <div class="col-lg-12"> <!-- Cambiado de col-lg-6 a col-lg-12 para que abarque toda la longitud -->
        <a href="ofertas.php">
            <img src="images/mujer/ofertas99.png" class="img-fluid mx-auto d-block" style="max-width: 100%; height: auto; max-height: 100%; width: auto;" alt="Imagen publicitaria">
        </a>
    </div>
</div>

    <!--~~~~~~~~~~FIN DE LENTES AVIADOR~~~~~~~~~~~~-->
<?php include 'footer.php'; ?>
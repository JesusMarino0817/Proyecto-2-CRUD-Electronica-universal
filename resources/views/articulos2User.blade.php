<x-app-layout>
	<x-slot name="header">
    </x-slot>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <h1 class="my-4">Articulos</h1>
        <h3>Accesorios para celular</h3>
        <div class="list-group">
          <a href="articulos1User" class="list-group-item">Audio y Sonido</a>
          <a href="articulos2User" class="list-group-item">Accesorios para celular</a>
          <a href="articulos3User" class="list-group-item">Otros</a>
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="img/acces1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/acces2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/acces3.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/acces4.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Audífonos Wireless – Sports Headset</a>
                </h4>
                <h5>$60.00</h5>
                <p class="card-text">Wireless, Ideales para hace ejercicio, Control de volumen, Contestador de llamadas, Cable cargador, Batería recargable, 10 mts de alcance, Tiempo de carga 2.5hrs</p>
              </div>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/acces5.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Audífonos Stereo Headset</a>
                </h4>
                <h5>$100.00</h5>
                <p class="card-text">Colores blanco y rojo, Material resistente, Plegables, Cable 1.5 mts. ,Sonido de alta calidad</p>
              </div>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/acces6.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Power bank / Lámpara</a>
                </h4>
                <h5>$80.00</h5>
                <p class="card-text">Ideal para emergencias, campamentos, o viajes largos, Diseño compacto para mejor portabilidad, Compatible con teléfonos celulares, smart watch o dispositivos con entrara V8, Carga por USB, Salida V8, Iluminación blanca y roja, Tres modos de iluminación.</p>
              </div>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/acces7.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Cargador iPad / iPod / iPhone 30 pin</a>
                </h4>
                <h5>$50.00</h5>
                <p class="card-text">Accesorios completamente compatibles con cualquier iOS anterior o posterior., Conecta tu iPhone, iPad o iPod para empezar a sincronizar y cargar tu dispositivo fácilmente., COMPATIBLIDAD, iPad (1ª generación), iPad 2 (2ª generación), iPad (3ª generación), Diseñado para la carga de tu dispositivo Ipod Iphone 4s 4 3gs 3g., Cables extra gruesos para una carga, sincronización y transferencia de datos más rápidas, Compatible con dispositivos iOS móviles Apple de 30 pines.</p>
              </div>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/acces8.jpg"  alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Cargador solar – Lámapara LED</a>
                </h4>
                <h5>$100.00</h5>
                <p class="card-text">Conector USB, Lampara LED, Cable cargador, Se recomienda una carga inicial de 3 hrs antes de su primer uso, Gomas protectoras anti-shok</p>
              </div>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/acces9.jpg"  alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">BMemoria micro SD de 64gb Clase-4</a>
                </h4>
                <h5>$155.00</h5>
                <p class="card-text">Memoria micro SD de 64gb CLASE 4, En blister con adaptador SD/p>
              </div>
              
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</x-app-layout>
	


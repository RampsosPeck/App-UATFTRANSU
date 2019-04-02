<!DOCTYPE html>
<html lang="es">
  <head> 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Sistema de Transporte Universitario de la Universidad Autónoma Tomás Frías">
    <meta name="author" content="Ing. Jorge Peralta">
    <meta name="keyword" content="Sistema de transporte U.A.T.F., Sistema de transporte Universitario">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>UATF | TRANSPORT</title>

    <link rel="stylesheet" href="/css/app.css">
    <link rel="shortcut icon" href="{{ asset('/img/bus.png') }}" />

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/plantilla.css" rel="stylesheet"> 
     
  </head>
  
  <body>
<div id="app">
  
    <h1 class="site-heading  text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">UNIVERSIDAD AUTÓNOMA TOMÁS FRÍAS</span>
      <span class="site-heading-lower"> <font color="#e6a756">SISTEMA DE TRANSPORTE UNIVERSITARIO</font> </span>
      <span class="site-heading-upper text-primary  py-1">UATFTRANS</span>

    </h1>

<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#"> <i>UATFTRANS</i> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
                <li class="nav-item {{ request()->is('/') ? 'active' : ''}} px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="/">WEB
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
             @if (Route::has('login'))
                  @auth 
                      <li class="nav-item {{ request()->is('/admin') ? 'active' : ''}} px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="{{ url('/admin') }}">INICIO
                          <span class="sr-only">(current)</span>
                        </a>
                      </li>
                  @else 
                      <li class="nav-item {{ request()->is('login') ? 'active' : ''}} px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="{{ route('login') }}">INGRESAR</a>
                      </li>
                      @if (Route::has('register')) 
                         <!--  <li class="nav-item {{ request()->is('register') ? 'active' : ''}} px-lg-4">
                           <a class="nav-link text-uppercase text-expanded" href="{{ route('register') }}"> REGISTRARSE </a> 
                          </li>-->
                      @endif
                  @endauth
                
            @endif 

            <li class="nav-item {{ request()->is('map') ? 'active' : ''}} px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="{{ url('map') }}">RUTA</a>
            </li>
            <li class="nav-item {{ request()->is('clock') ? 'active' : ''}} px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="{{ url('clock') }}">HORARIOS</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section clearfix">
      <div class="container">  
          @if(request()->path() == '/')
              <div class="intro">
                <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{ asset('/img/logines.jpg') }}" alt="">
                <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                  <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">UATFTRANS</span>
                    <span class="section-heading-lower">Pruébalo!</span>
                  </h2>
                  <p class="mb-3 text-justify">Con el propósito de brindar medios de apoyo y cubrir necesidades de traslado de los estudiantes universitarios y docentes durante el desempeño de la vida académica, la U.A.T.F. ha incrementado y fortalecido sus proyectos de movilidad, con medios innovadores, eficientes y sustentables.
                  </p>
                  <div class="intro-button mx-auto">
                    <a class="btn btn-primary btn-xl" href="{{ route('login') }}">Ingresa ya..!</a>
                  </div>
                </div>
              </div>
          @else
            @yield('content')
          @endif
      </div>
    </section>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">NUESTRO COMPROMISO</span>
                <span class="section-heading-lower">ELEMENTAL</span>
              </h2>  
              <!--<p class="mb-0  text-justify">La ciudadela universitaria de la U.A.T.F. es un nodo importante dentro de la trama vial urbana, pues se caracteriza por la concentración de actividades en determinadas horas del día, atrayendo una considerable cantidad de viajes por los propósitos estudio y trabajo en las horas pico de la mañana; se observan, por lo tanto, elevados volúmenes vehiculares de ingreso a la ciudadela universitaria, incluyendo vehículos particulares y de transporte colectivo, así como también una intensa actividad peatonal. Estos volúmenes, por lo general, ocasionan retrasos temporales en los accesos a la ciudadela y también en las vías adyacentes a ellos. A mediodía o en la tarde los viajes que se originan en las universidades y se dirigen mayormente a los hogares también ocasionan demoras internas y sobre el entorno cercano. Estas características han llevado a la universidad <strong>"TOMÁS FRÍAS"</strong> a planificar sus sistemas de transporte atendiendo las necesidades de los estudiantes y, al mismo tiempo, brindar la movilidad bajo los criterios de sostenibilidad. </p> -->
              <p class="mb-0  text-justify"> Es brindar a los estudiantes, docentes y administrativos de la <strong>"UNIVERSIDAD TOMÁS FRÍAS"</strong> la facilidad de trasladarse de manera cómoda y rápida a la ciudadela universitaria desde el edificio central y viceversa. Con la finalidad de la obtención de un sistema de transporte eficiente, seguro, y ambientalmente amigable bajo los criterios de sostenibilidad y responsabilidad.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer text-faded text-center py-5">
      <div class="container"> 
        <p class="m-0 small">  U.A.T.F. - {{ date('Y') }} . Created by &copy; ING. JORGE PERALTA</p>
      </div>
    </footer>

 </div>  
    <script src="/js/app.js"></script> 
 
    </body>

</html>

    
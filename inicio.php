<?php
require_once('login.php');
session_start();
if (!isset($_SESSION['usuario'])) {
    die('ERROR: Ha intentado ingresar a una página restringida. Por favor
    <a href="index.php#ingresar">Inicie sesion</a>.');
}
?>

    <!doctype html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
    <!--[if gt IE 8]><!-->
    <html class="no-js" lang="">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--<script>type="text/javascript" src="http://maps.googleapis.com/maps/api/ls?v3"</script>-->
        <!--<script>type="text/javascript" src="http://maps.google.com/maps/api/js?v3"</script>-->
    </head>

    <body >
        <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->



        <!--CODE-->
        <div class="container">

            <h2 class="titulo text-center">Sistema de rastreo satelital</h2>
            <div class="col-md-offset-11 col-md-1 col-sm-3 col-md-2">
                <form class="form-horizontal" action="inicio.php">
                    <div class="form-group">
                        <div class="col-sm-offset-10 col-sm-1 col-md-1">
                            <button class="btn btn-success btn-md" name="salir">Salir</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="p titulo">

            </div>


            <!-- Carousel -->
            <div class="carousel slide" id="miSlider" data-ride="carousel">

                <!--  <ol class="carousel-indicators">
<li data-target="#miSlider" data-slide-to="0" class="active"></li>
<li data-target="#miSlider" data-slide-to="1"></li>
<li data-target="#miSlider" data-slide-to="2"></li>
</ol> -->
                <!-- Los circulos se visualizaran al crear las imagenes -->
                <div class="carousel-inner">

                    <div class="item active">
                        <img src="img/img1.jpg" alt="Imagen1" class="center-block imgcarouseluser">
                        <!-- Agregando txto -->
                        <div class="carousel-caption">
                        </div>
                    </div>


                    <div class="item">
                        <img src="img/img2.jpg" alt="Imagen2" class="center-block imgcarouseluser">
                        <div class="carousel-caption">
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/img3.jpg" alt="Imagen3" class="center-block imgcarouseluser">
                        <div class="carousel-caption">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                </div>
                                <div class="hidden-xs col-sm-12">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Agregando flecha izquierda  la clase left agrega sombra cuando el cursor se acerca a la izquierda-->
                <!-- <a href="#miSlider" class="carousel-control left" data-slide="prev">
Creando el gliphicon de la flecha
<span class="glyphicon glyphicon-chevron-left"></span>
</a> -->

                <!-- <a href="#miSlider" class="carousel-control right" data-slide="next">
Creando el gliphicon de la flecha
<span class="glyphicon glyphicon-chevron-right"></span>
</a> -->

            </div>
            <!-- FinCarousel -->


            <div class="row">
                <div class="col-xs-12 col-sm-1">
                    <label for="" class="col-sm-2 form-control">Minuto</label>
                </div>
                <div class="col-xs-12 col-sm-1">
                    <label for="" class="col-sm-2 form-control">Hora</label>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <label for="" class="col-sm-2 form-control">Dia</label>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <label for="" class="col-sm-2 form-control">Mes</label>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <label for="" class="col-sm-2 form-control">Año</label>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <label for="" class="col-sm-2 form-control">Todo</label>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-1">
                    <select multiple class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-xs-12 col-sm-1">
                    <select multiple class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <select multiple class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <select multiple class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <select multiple class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-xs-12 col-sm-2">
                </div>
            </div>

          
            <div class="row">
                <br><br>
                <div id="map" class="col-sm-offset-2 col-sm-10" style="width: 700px; height: 500px;">
                    --Aca va el mapa--
                </div>      
            </div>
                
            <script type="text/javascript">
            //NAMESPACE ---> google.maps.ALGO

            function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 19    
  });
  var infoWindow = new google.maps.InfoWindow({map: map});

  // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      infoWindow.setPosition(pos);
      infoWindow.setContent('Location found.');
      map.setCenter(pos);
    }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }

  var flightPlanCoordinates = [
    {lat: 17.556588, lng: -99.523448},
    {lat: 17.566588, lng: -99.513448},
    {lat: 17.576588, lng: -99.503448},
    {lat: 17.586588, lng: -99.423448}
  ];
  var flightPath = new google.maps.Polyline({
    path: flightPlanCoordinates,
    geodesic: true,
    strokeColor: '#FF0000',
    strokeOpacity: 1.0,
    strokeWeight: 2
  });

  flightPath.setMap(map);
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
}




            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3oc1y6qCfSW5fwq78we77RkBKWmNHWyw&callback=initMap"
        async defer></script>

<!--
            <script type="text/javascript">

            //mostrar_objeto( navigator );
            //mostrar_objeto( navigator.geolocation );

            // los dos argumentos son de tipo callback (funciona asincronicamente)
            navigator.geolocation.getCurrentPosition( fn_ok, fn_error )

            var divMapa = document.getElementById('mapa');

            // Argumento que da automaticamente por callback de tipo event
            function fn_ok( respuesta ){

                divMapa.innerHTML = 'Tenemos autorizaion para ver la ubicacion';
                //mostrar_objeto( respuesta );
                //mostrar_objeto( respuesta.coords );
                var lat =  respuesta.coords.latitude;
                var lon = respuesta.coords.longitude;

                divMapa.innerHTML = lat + ' , ' + lon;

            }
            function fn_error(){
                divMapa.innerHTML = 'Hubo un problema solicitando los datos';
            }
            function mostrar_objeto( obj ){
                for( var prop in obj ){
                    document.write( prop = ': ' + obj[prop] + '<br /> ' );
                }
            }

            </script>
        -->
        </div>

        <!--CODE-->


        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
        <script>
            window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
        </script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>

    </html>

    <?php
if (isset($_GET['salir'])) {
    session_start();
    // eliminar sesión
    session_destroy();
    echo "<script>alert('La sesion se ha cerrado!');
          var pagina='index.php';
              function redireccionar() {
                location.href=pagina
              } 
              // este es un tiempo para redireccionar.
              setTimeout ('redireccionar()', 10);
          </script>";
}
?>
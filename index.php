<?php
require_once("querys.php");
require_once("login.php");
?>
  <!doctype html>
  <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
  <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
  <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
  <!--[if gt IE 8]><!--> 
  <html class="no-js" lang=""> <!--<![endif]-->
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
      </head>
      <body data-spy="scroll" data-target="#scrollspy" data-offset="1">
          <!--[if lt IE 8]>
              <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
          <![endif]-->

      <!--CODE-->
      <nav class="navbar navbar-default navbar-fixed-top" id="scrollspy">
          <div class="container-fluid">
            <div class="navbar-header">
              <button class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </but ton>
              <a href="#" class="navbar-brand">RSSU</a>
            </div>
            <div class="collapse navbar-collapse" id="menu">
              <ul class="nav navbar-nav">
                <li><a href="#inicio">RSSU</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#informacion">Informacion</a></li>
                <li><a href="#contacto">Contacto</a></li>
                <li><a href="#ingresar">Ingresar</a></li>
                <li><a href="#registrarse">Registrarse</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <div id="inicio">
          <!-- <img src="img/img1.jpg" alt="" class="img-responsive fondo"> -->
          <div class="container">
            <br><br><br><h1 class="text-center">Sistema de rastreo satelital</h1><br>
          </div>
          
        <!-- Carousel -->
        <div class="carousel slide" id="miSlider" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#miSlider" data-slide-to="0" class="active"></li>
            <li data-target="#miSlider" data-slide-to="1"></li>
            <li data-target="#miSlider" data-slide-to="2"></li>
          </ol>

          <!-- Los circulos se visualizaran al crear las imagenes -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="img/img1.jpg" alt="Imagen1" class="imgcarousel">
              <!-- Agregando txto -->
              <div class="carousel-caption">
                <p class="txttitlecarusel">Rastreo</p>
                <br><br>
                 <p class="txtcarusel">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti fugit, iure a eum velit sint incidunt temporibus sapiente.</p>
                <p class="txtcarusel">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem sapiente deleniti nemo cupiditate illum consequuntur enim eveniet quo debitis sequi saepe omnis ex perferendis vitae, odit magnam. Officia, fuga, dolores!</p> 
                <br><br><br><br>
              </div>
            </div>
            
            <div class="item">
              <img src="img/img2.jpg" alt="Imagen2" class="imgcarousel">
              <div class="carousel-caption">
                 <p class="txttitlecarusel">Rastreo</p>
                 <br><br>
                <p class="txtcarusel">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti fugit, iure a eum velit sint incidunt temporibus sapiente.</p>
                <br><br><br><br>
              </div>
            </div>
            <div class="item">
              <img src="img/img3.jpg" alt="Imagen3" class="imgcarousel">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <p class="txttitlecarusel">Rastreo</p>
                    <br><br>
                  </div>
                  <div class="hidden-xs col-sm-12">
                    <p class="txtcarusel">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum natus consectetur, deleniti nobis quo omnis voluptate, voluptatum ipsa voluptas nemo praesentium optio deserunt, reprehenderit voluptatem, laborum porro libero debitis qui!</p>
                    <br><br><br><br>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Agregando flecha izquierda  la clase left agrega sombra cuando el cursor se acerca a la izquierda-->
          <a href="#miSlider" class="carousel-control left" data-slide="prev">
            <!-- Creando el gliphicon de la flecha -->
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a href="#miSlider" class="carousel-control right" data-slide="next">
            <!-- Creando el gliphicon de la flecha -->
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
        <!-- FinCarousel -->
          <!-- <div class="divisor"></div> -->
        </div>
        <br><br>
        <div id="servicios">
          <!-- <img src="img/img2.jpg" alt="" class="img-responsive fondo"> -->
          <br><br>
          <h1>Servicios</h1>
          <br><br>
          <div class="container">
            <p class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quae distinctio cumque facere quam natus alias tenetur reprehenderit est tempore ducimus autem eos, adipisci itaque quaerat odit, consectetur maxime unde.</p>
            <div class="row">
              <div class="col-xs-12 col-sm-4">
                <img src="img/img3.jpg" class="img-responsive">
              </div>
            </div>
            <h1 class="text-right">Funcionamiento</h1>
            <br>
            <p class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non velit porro alias quo quibusdam tenetur. Beatae sit eum in exercitationem, ducimus, iste laboriosam, quaerat, harum pariatur esse quidem provident sequi!</p>
            <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-offset-8">
                <img src="img/img2.jpg" class="img-responsive">
              </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>
          <!-- <div class="divisor"></div> -->
        </div>
        
        <br><br>
        <div id="informacion">
          <br><br>
          <h1>Informacion</h1>
          <br><br>
          <!-- <img src="img/img3.jpg" alt="" class="img-responsive fondo"> -->
            <div class="container">
              <p class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo blanditiis unde, nobis deserunt corporis vel sunt optio mollitia fugit dolor inventore exercitationem assumenda alias magni excepturi! Optio dicta rem minus?
              </p>
            </div>
          <!-- <div class="divisor"></div> -->
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>

        <br><br>
        <div id="contacto">
          <br><br>
          <h1>Contacto</h1>
          <br><br>
          <!-- <img src="img/img1.jpg" alt="" class="img-responsive fondo"> -->
            <div class="container">
              <p class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores repudiandae velit quisquam commodi iste voluptas odit delectus non, vero, fuga rerum harum molestias debitis minus recusandae fugiat laborum iusto, vitae!</p>
              <br><br>
              <div class="row">
            
             <div class="col-xs-12 col-sm-8 col-md-8">
             <form class="form-horizontal" action="index.php">
              <div class="form-group">
                <label for="Usuario" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control input-lg" placeholder="Nombre">
                </div>
              </div>
              <div class="form-group">
                <!-- clase control-label para alinear los label a la derecha -->
                <label for="Contrase_na" class="col-sm-2 control-label">Correo</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control input-lg" placeholder="Correo">
                </div>
              </div>
              <div class="form-group">
                <!-- clase control-label para alinear los label a la derecha -->
                <label for="Contrase_na" class="col-sm-2 control-label">Telefono</label>
                <div class="col-sm-8">
                  <input type="tel" class="form-control input-lg" placeholder="Telefono">
                </div>
              </div>
              <div class="form-group">
                <!-- clase control-label para alinear los label a la derecha -->
                <label for="Contrase_na" class="col-sm-2 control-label">Mensaje</label>
                <div class="col-sm-10">
                  <textarea type="text" class="form-control input-lg" rows="6" placeholder="Mensaje"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button class="btn btn-primary btn-lg" name="submitcontacto">Enviar</button>
                </div>
              </div>

            </form>
            </div>
             <div class="hidden-xs hidden-sm col-md-2 col-md-offset-2">
               <img src="img/img_contacto.png" class="img-responsive">
             </div>
            </div>

            </div>
          <!-- <div class="divisor"></div> -->
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>

        <br><br>
        <div id="ingresar">
          <br><br>
          <h1>Ingresar</h1>
          <br><br>
          <!-- <img src="img/img2.jpg" alt="" class="img-responsive fondo"> -->
            <div class="container">
              <p class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quis repellendus minus adipisci, blanditiis quaerat? Earum, aliquam, eos! Exercitationem et veritatis voluptatum expedita adipisci illum esse, incidunt sunt aperiam cupiditate?</p>
              <br><br><br>
              <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-8">
              <form class="form-horizontal" action="index.php">
                <div class="form-group">
                  <label for="Usuario" class="col-sm-2 control-label">Correo / Usuario</label>
                  <div class="col-xs-12 col-md-8">
                    <input type="text" class="form-control input-lg" placeholder="Correo / Usuario" name="usuario">
                  </div>
                </div>
                <div class="form-group">
                  <!-- clase control-label para alinear los label a la derecha -->
                  <label for="Contrase_na" class="col-sm-2 control-label">Contrasena</label>
                  <div class="col-xs-12 col-md-8">
                    <input type="text" class="form-control input-lg" placeholder="Contraseña" name="contrase_na">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button class="btn btn-primary btn-lg" name="submitingresar">Enviar</button>
                  </div>
                </div>
              </form>
              </div>
               <div class="hidden-xs hidden-sm col-md-2 col-md-offset-2">
                  <img src="img/img_ingresar.png" class="img-responsive">
                </div>

              </div>
            </div>
          <!-- <div class="divisor"></div> -->
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>


        <br><br>
        <div id="registrarse">
          <br><br>
          <h1>Registrarse</h1>
          <br><br>
            <!-- <img src="img/img2.jpg" alt="" class="img-responsive fondo"> -->
            <div class="container">
              <p class="txt">Adquiere el servicio! <br>Tan solo ingresa tus datos para ponerce en contcto con usted</p>
              <div class="row">
                <div class="hidden-xs hidden-sm col-md-2 col-md-offset-10">
                  <img src="img/img_registro.png" class="img-responsive">
                </div>
              </div>
              <form id="registro" class="form-horizontal" metod="GET" action="index.php">
                <div class="form-group ">
                  <label for="Nombre" class="col-sm-2 control-label">Nombre de la empresa</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control input-lg" placeholder="Nombre" name="nombreemp">
                  </div>
                </div>
                <div class="form-group">
                  <!-- clase control-label para alinear los label a la derecha -->
                  <label for="Telefono" class="col-sm-2 control-label">Telefono</label>
                  <div class="col-sm-10 col-md-4"> 
                   <input type="text" class="form-control input-lg" placeholder="Telefono" name="telefonoemp">
                  </div>
                </div>
                <div class="form-group">
                  <!-- clase control-label para alinear los label a la derecha -->
                  <label for="Correo" class="col-sm-2 control-label">Correo</label>
                  <div class="col-sm-10 col-md-4"> 
                   <input type="text" class="form-control input-lg" placeholder="Correo" name="correoemp">
                  </div>
                </div>
                <div class="banner_delgado"></div>
                <div class="form-group">
                  <h4 for="Nombre">Datos del quien estara a cargo</h4>
                </div>
                <div class="form-group">
                  <!-- clase control-label para alinear los label a la derecha -->
                  <label for="Nombre" class="col-sm-2 control-label">Nombre</label>
                  <div class="col-sm-10 col-md-4"> 
                   <input type="text" class="form-control input-lg" placeholder="Nombre" name="nombreuser">
                  </div>
                </div>
                <div class="form-group">
                  <!-- clase control-label para alinear los label a la derecha -->
                  <label for="Apellido paterno" class="col-sm-2 control-label">Apellido paterno</label>
                  <div class="col-sm-10 col-md-4"> 
                   <input type="text" class="form-control input-lg" placeholder="Apellido paterno" name="appuser">
                  </div>
                </div>
                <div class="form-group">
                  <!-- clase control-label para alinear los label a la derecha -->
                  <label for="Apellido materno" class="col-sm-2 control-label">Apellido materno</label>
                  <div class="col-sm-10 col-md-4"> 
                   <input type="text" class="form-control input-lg" placeholder="Apellido materno" name="apmuser">
                  </div>
                </div>
                <div class="form-group">
                  <!-- clase control-label para alinear los label a la derecha -->
                  <label for="Telefono" class="col-sm-2 control-label">Telefono</label>
                  <div class="col-sm-10 col-md-4"> 
                   <input type="text" class="form-control input-lg" placeholder="Telefono" name="telefonouser">
                  </div>
                </div>
                <div class="form-group">
                  <!-- clase control-label para alinear los label a la derecha -->
                  <label for="Correo" class="col-sm-2 control-label">Correo</label>
                  <div class="col-sm-10 col-md-4"> 
                   <input type="text" class="form-control input-lg" placeholder="Correo" name="correouser">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button class="btn btn-primary btn-lg" name="submitregistro">Registrar</button>
                  </div>
                </div>
              </form>



            </div>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>


      <!--CODE-->


      <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
      <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
      <script src="js/vendor/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
      </body>
  </html>
  
  <?php
  $ejecucion = new Bd();
//$sql = "INSERT INTO empleados (nombre, puesto) VALUES ('$nombre', '$puesto')";
//$arreglo = array('nombre' => '$nombre', 'puesto' => '$puesto');
//$ejecucion->insertar($arreglo,'empleados');

  if (isset($_GET['submitregistro'])) {

    // $elementosEmpresa;
    // $elementosUsuario;
    $nombreEmp = "";
    $telefonoEmp = "";
    $correoEmp = "";
    $nombreUser = "";
    $appUser = "";
    $apmUser = "";
    $telefonoUser = "";
    $correoUser = "";

    if (!empty($_GET['nombreemp']) && !empty($_GET['telefonoemp']) && !empty($_GET['correoemp']) && !empty($_GET['nombreuser']) && !empty($_GET['appuser']) && !empty($_GET['apmuser']) && !empty($_GET['telefonouser']) && !empty($_GET['correouser'])) {
      echo "<script>alert('llamando...');</script>";
      $elementosEmpresa["nombre"] = $_GET['nombreemp']; 
      $elementosEmpresa["telefono"] = $_GET['telefonoemp'];
      $elementosEmpresa["correo"] = $_GET['correoemp'];
      $elementosEmpresa["status"] = 'false';
      $ejecucion->insertar($elementosEmpresa,'empresa_cliente');

      $elementosUsuario["nombre"] = $_GET['nombreuser'];
      $elementosUsuario["ap_paterno"] = $_GET['appuser'];
      $elementosUsuario["ap_materno"] = $_GET['apmuser'];
      $elementosUsuario["telefono"] = $_GET['telefonouser'];
      $elementosUsuario["correo"] = $_GET['correouser'];
      $elementosUsuario["usuario"] = 'user';
      $elementosUsuario["contrase_na"] = 123;
      $elementosUsuario["empresa_id"] = $ejecucion->ultimoInsertado();
      $ejecucion->insertar($elementosUsuario,'usuarios');

      if ($ejecucion->fallosEnInserciones()){
        echo "<script type=\"text/javascript\">alert(\"Los datos se han guardado satisfactoriamente\");</script>";  
      }
    }else{
      echo "<script>alert('Hay campos vacios');</script>";
    }
    unset($_GET['submitregistro']);
  }
  if (isset($_GET['submitingresar'])) {
    $nombredeusuario = $_GET['usuario'];
    $contrasena = $_GET['contrase_na'];
    $login = new Login();
    $inicio = $login->validar($nombredeusuario, $contrasena);
    if($inicio['status']){
      echo "<script>alert('Bienvenido');</script>";
      echo "<script LANGUAGE='JavaScript'>
              var pagina='inicio.php';
              function redireccionar() {
                location.href=pagina
              } 
              // este es un tiempo para redireccionar.
              setTimeout ('redireccionar()', 10);
            </script>";
      print_r(headers_list());
    }else{
      echo $inicio['mensaje'];
      echo "<script>alert('Intentelo de nuevo');</script>";
      echo "<script LANGUAGE='JavaScript'>
              var pagina='index.php#ingresar';
              function redireccionar() {
                location.href=pagina
              } 
              // este es un tiempo para redireccionar.
              setTimeout ('redireccionar()', 10);
            </script>";
    }


    //echo "<script>alert('ingresar');</script>";
  }
  if (isset($_GET['submitcontacto'])) {
    echo "<script>alert('contacto');</script>";
  }
  ?>
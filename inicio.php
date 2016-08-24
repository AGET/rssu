<?php
require_once('login.php');
require_once("querys.php");
require_once('conexion.php');
session_start();
if (!isset($_SESSION['nombre'])) {
    die('<body style="background-color:black; height:100%">
        <div style="color:white">ERROR: Ha intentado ingresar a una página restringida. Por favor
                <form action="index.php#ingresar" method="post" >
                    <button style=" background-color:#9e2b2b;  color:#dae3e3;  border:solid 1px #9e2b2b; " name="iniciarSesion" value="true">Inicie sesion</button>
                </form>
            </div>
            <img src="bootstrap/img/access-denied.png" style="width:100%;height:90%;">
        </body>');
} else {
//    $coordenadas = coordenadas();
    $ejecucion = new Bd();
    //    echo "<p style=' color:green'>";
    $gpsDeusuario = $ejecucion->consultarGpsDeUsuario($_SESSION['usuario_id']);

    //    foreach ($array as $indice => $valor) {
    //        echo "$indice | ";
    //        echo $valor["numero"] . " -- ";
    //        echo $valor["descripcion"];
    //
    //        foreach ($valor as $item) {
    //            echo "$item:";
    //        }
    //    }
    //    echo "</p>";
}
$coordenadasAll = array();
$gpsSeleccionados = array();
if (isset($_POST['actualizar'])) {
    echo "<div style='color:white'>";
    if (isset($_POST['tiempo_inicial'])) {
        echo "inicio: " . $_POST['tiempo_inicial'];
    }

    if (isset($_POST['tiempo_final'])) {
        echo "final:" . $_POST['tiempo_final'];
    }

    if (isset($_POST['gps'])) {
//        echo "cantidad: " . count($_POST['gps']);
        $ejecucion = new Bd();
        foreach ($_POST['gps'] as $indice => $valor) {
            array_push($gpsSeleccionados, $valor);
//            echo " indice:" . $indice . " valor:" . $valor . " ";
            $coordenadas = $ejecucion->consutarCoordenadasUsarioGps($valor);
            array_push($coordenadasAll, $coordenadas);
        }
    }
    //$coordenadasAll = json_encode($coordenadasAll);
//    var_dump($coordenadasAll);
//    Borrar
//    $contadorDispositivos = 0;
//    while ($contadorDispositivos < count($coordenadasAll)) {
//        $contador = 0;
//        while ($contador < count($coordenadasAll[$contadorDispositivos])) {
//            $lon = $coordenadasAll[$contadorDispositivos][$contador]["lng"];
//            $lat = $coordenadasAll[$contadorDispositivos][$contador]["lat"];
//            if ($contador == 0) {
//                echo ("Inicio: lat: $lat, long: $lon");
//            } else if ($contador == (count($coordenadas) - 1)) {
//                echo ("Fin: lat: $lat, long: $lon");
//            } else {
//                echo ("Intermedio: lat: $lat, long: $lon");
//            }
//            $contador++;
//        }
//        echo "*************************";
//        $aux = json_encode($coordenadas);
//        echo ("var arrayJS = $aux;" );
//            echo ("metLineas(arrayJS);" );
//    $contadorDispositivos++;
//    }
//    finborrar

    echo "</div>";
//    foreach ($_POST['gps'] as $indice => $valor) {
//        echo "<stript> alert(indice: " . $indice . " => " . $valor . ");</script>";
    //    }
    //Login($_POST['nombre-usuario'], $_POST['contrasena-usuario']);
}
?>

<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
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

        <!-- originales -->
        <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
        <!--<link href="picker/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">-->
        <!-- fin originales -->

        <!--<link href="picker/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">-->
        <!--<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">-->
        <link href="picker/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

        <link rel="stylesheet" href="picker/bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="bootstrap/css/main.css">

        <script src="bootstrap/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

                <!--<script>type="text/javascript" src="http://maps.googleapis.com/maps/api/ls?v3"</script>-->
                <!--<script>type="text/javascript" src="http://maps.google.com/maps/api/js?v3"</script>-->



        <!--Seleccion-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="multi_seleccion/jquery.min.js"></script>
        <script src="multi_seleccion/jquery.sumoselect.js"></script>
        <link href="multi_seleccion/sumoselect.css" rel="stylesheet" />

        <script type="text/javascript">
            $(document).ready(function () {
                window.asd = $('.SlectBox').SumoSelect({
                    csvDispCount: 3,
                    captionFormatAllSelected: "Yeah, OK, so everything."
                });
                window.test = $('.testsel').SumoSelect({
                    okCancelInMulti: true,
                    captionFormatAllSelected: "Yeah, OK, so everything."
                });
                //                okCancelInMulti: true,
                window.testSelAll = $('.testSelAll').SumoSelect({
                    selectAll: true
                });
                window.testSelAlld = $('.SlectBox-grp').SumoSelect({
                    okCancelInMulti: true,
                    selectAll: true
                });

                window.testSelAll2 = $('.testSelAll2').SumoSelect({
                    selectAll: true
                });


                window.Search = $('.search-box').SumoSelect({
                    csvDispCount: 3,
                    search: true,
                    searchText: 'Enter here.'
                });
                window.searchSelAll = $('.search-box-sel-all').SumoSelect({
                    csvDispCount: 3,
                    selectAll: true,
                    search: true,
                    searchText: 'Enter here.',
                    okCancelInMulti: true
                });
                window.searchSelAll = $('.search-box-open-up').SumoSelect({
                    csvDispCount: 3,
                    selectAll: true,
                    search: false,
                    searchText: 'Enter here.',
                    up: true
                });

                window.groups_eg_g = $('.groups_eg_g').SumoSelect({
                    selectAll: true,
                    search: true
                });
            });
        </script>

        <!--finseleccion-->

    </head>

    <body>
        <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a
href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


        <!--CODE-->
        <div id="contenedor">
            <h2 class="text-center titulo_inicio">Sistema de rastreo satelital</h2>
            <div id="cabecera">
                <!--<div class="container" style="background-color: #aacc99;">-->

                <!--<form action="" class="form-horizontal">-->
                <div id="banner" class="clearfix">
                    <!--<fieldset>-->
                    <!--<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">-->
                    <ul class="campo_elementos">
                        <li class="un_elemento">
                            <div>
                                <label for="Contrase_na">Bienvenido</label>
                            </div>
                        </li>
                        <li class="un_elemento">
                            <div>
                                <label for="Contrase_na">
                                    <?php
                                    echo $_SESSION['nombre'];
                                    ?>
                                </label>
                            </div>
                        </li>

                    </ul>
                    <!--</fieldset>-->
                    <form action="inicio.php" method="post" class="btn_salir">
                        <button class="btn btn-primary btn-sm derecha" name="salir" value="true">Salir</button>
                    </form>
                </div>


                <!--</form>-->

                <!-- Tiempo -->

                <form action="inicio.php" method="POST" name="filtros" class="form-horizontal">
                    <!--<fieldset>-->
                    <div class="row">
                        <div class="col-md-5">
                            <!--<div class="control-group">-->
                            <div class="form-group">
                                <label class="control-label">Tiempo inicial</label>
                                <!-- <div class="controls input-append date form_datetime" data-date="2016-01-01T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1"> -->
                                <div class="controls input-append date form_datetime" data-date="2016-01-01T05:25:07Z" data-date-format="yyyy-MM-dd HH:ii p" data-link-field="dtp_input1">

                                    <input name = "tiempo_inicial"size="16" type="text" value="" readonly>
                                    <span class="add-on"><i class="icon-remove"></i></span>
                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                                <input type="hidden" id="dtp_input1" value="" />
                                <br/>
                            </div>
                            <!--</div>-->
                        </div>

                        <div class="col-md-5">
                            <!--<div class="control-group">-->
                            <div class="form-group">
                                <label class="control-label">Tiempo final</label>
                                <div class="controls input-append date form_datetime" data-date="2016-01-01T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                                    <input name = "tiempo_final" size="16" type="text" value="" readonly>
                                    <span class="add-on"><i class="icon-remove"></i></span>
                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                                <input type="hidden" id="dtp_input1" value="" />
                                <br/>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <!-- <div class="control-group "> -->
                            <div class="form-group">
                                <label class="control-label">Todo</label>
                                <div class="controls input-append">
                                    <input name="todo" type="checkbox" />
                                </div>
                                <input type="hidden" id="dtp_input1" value="" />
                                <br/>
                            </div>
                        </div>
                        <div id="distincion" style="font-size:11px;"></div>


                        <div class="col-md-5" id="seleccion_multiple">
                            <!-- <div class="control-group "> -->
                            <div class="form-group">
                                <label class="control-label" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;color:#444;font-size:13px;">Seleccione el dispositivo</label>
                                &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                <select name="gps[]" multiple="multiple" placeholder="Puede seleccionar varios" onchange="console.log($(this).children(':selected').length)" class="testSelAll" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;color:#444;font-size:13px;">

                                    <?php
                                    if (isset($gpsSeleccionados) && count($gpsSeleccionados) > 0) {
                                        $banderaGpsSeleccionado = false;
                                        foreach ($gpsDeusuario as $indice => $valor) {
                                            foreach ($gpsSeleccionados as $valorGpsSeleccionados) {
                                                if ($valor['enlace_id'] == $valorGpsSeleccionados) {
                                                    $banderaGpsSeleccionado = true;
                                                    break;
                                                } else {
                                                    $banderaGpsSeleccionado = false;
                                                }
                                            }
                                            if ($banderaGpsSeleccionado) {
                                                echo "<option selected value=" . $valor['enlace_id'] . ">" . $valor['descripcion'] . "</option>";
                                            } else {
                                                echo "<option  value=" . $valor['enlace_id'] . ">" . $valor['descripcion'] . "</option>";
                                            }
                                        }
                                    } else {
                                        foreach ($gpsDeusuario as $indice => $valor) {
                                            echo "<option  value=" . $valor['enlace_id'] . ">" . $valor['descripcion'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>


                                <?php
//foreach ($_POST['gps'] as $indice => $valor){
//echo "indice: ".$indice." => ".$valor."<br>";
//}
                                ?>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-sm derecha btn_actualizar" onclick="javascript:document.filtros.submit();" name="actualizar" value="true">Actualizar</button>
                    <!--</fieldset>-->
                </form>
                <!--                </div>-->
            </div>

            <br>
            <br>
            <div id="map">

            </div>
        </div>

        <!--CODE-->


                <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3oc1y6qCfSW5fwq78we77RkBKWmNHWyw&callback=initialize" async defer>
        </script>
        <!-- var la= parseFloat('<?php echo $lat; ?>'); -->
        <!-- var lo= parseFloat('<?php echo $lon; ?>'); -->

        <script>
            var center = null;
            var map = null;
            var currentPopup;
            var bounds = new google.maps.LatLngBounds();
            function metLineas(datosRuta, color) {
                var coordenadas = new Array();
                var s = "";
                for (var i = 0; i < datosRuta.length; i++) {
                    coordenadas.push(new google.maps.LatLng(datosRuta[i]["lat"], datosRuta[i]["lng"]));
//                    s += datosRuta[i]["lat"] + " | " + datosRuta[i]["lng"] + "\n";
                }
                var lineas = new google.maps.Polyline({
                    path: coordenadas,
                    map: map,
//                    strokeColor: '#BB2000',
                    strokeColor: color,
                    strokeWeight: 4,
                    strokeOpacity: 0.6,
                    clickable: false
                });
//                alert(s);
            }


            function addMarker(lat, lng, info, icono) {
                var pt = new google.maps.LatLng(lat, lng);
//                bounds.extend(pt);

                if (icono == null || icono == "") {
                    var marker = new google.maps.Marker({
                        position: pt,
                        map: map,
                        title: 'tooltip'
                    });
                } else {
                    var marker = new google.maps.Marker({
                        position: pt,
//                    icon: 'bootstrap/img/icono_ubicaciones.png',
                        icon: 'bootstrap/img/' + icono + '.png',
                        map: map,
                        title: 'click para ver informacion'
                    });
                }

                var popup = new google.maps.InfoWindow({
                    content: info,
                    maxWidth: 300
                });
                google.maps.event.addListener(marker, "click", function () {
                    if (currentPopup != null) {
                        currentPopup.close();
                        currentPopup = null;
                    }
                    popup.open(map, marker);
                    currentPopup = popup;
                });
                google.maps.event.addListener(popup, "closeclick", function () {
                    map.panTo(center);
                    currentPopup = null;
                });
            }

            function initialize() {

                map = new google.maps.Map(document.getElementById('map'), {
                    center: {
                        lat: 17.553893,
                        lng: -99.52511
                    },
                    zoom: 15,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    mapTypeControl: false,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
                    },
                    navigationControl: true,
                    navigationControlOptions: {
                        style: google.maps.NavigationControlStyle.SMALL
                    }
                });
                var infoWindow = new google.maps.InfoWindow({
                    map: map
                });
                // Try HTML5 geolocation.
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function (position) {
                        var pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                        infoWindow.setPosition(pos);
                        infoWindow.setContent('Localizacion Actual');
                        map.setCenter(pos);
                    }, function () {
                        handleLocationError(true, infoWindow, map.getCenter());
                    });
                } else {
                    // Browser doesn't support Geolocation
                    handleLocationError(false, infoWindow, map.getCenter());
                }
<?php
//if (isset($coordenadas)) {
//    if (count($coordenadas) > 0) {
//        $contador = 0;
//        while ($contador < count($coordenadas)) {
//            $lon = $coordenadas[$contador]["lng"];
//            $lat = $coordenadas[$contador]["lat"];
//            if ($contador == 0) {
//                echo ("addMarker($lat, $lon,'Inicio','icono_ubicaciones_inicio');");
//            } else if ($contador == (count($coordenadas) - 1)) {
//                echo ("addMarker($lat, $lon,'Fin','icono_ubicaciones_fin');");
//            } else {
//                echo ("addMarker($lat, $lon,'X','icono_ubicaciones');");
//            }
//            $contador++;
//        }
//        $aux = json_encode($coordenadas);
//        echo ("var arrayJS = $aux;" );
//        echo ("metLineas(arrayJS);" );
//    }
//}

if (isset($coordenadasAll)) {
    if (count($coordenadasAll) > 0) {

        $colorRand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F');

        $contadorDispositivos = 0;
        while ($contadorDispositivos < count($coordenadasAll)) {
            $contador = 0;
            if (count($coordenadasAll[$contadorDispositivos])) {
                while ($contador < count($coordenadasAll[$contadorDispositivos])) {
                    $lon = $coordenadasAll[$contadorDispositivos][$contador]["lng"];
                    $lat = $coordenadasAll[$contadorDispositivos][$contador]["lat"];
                    $fecha = $coordenadasAll[$contadorDispositivos][$contador]["fecha"];
                    $descripcion = $coordenadasAll[$contadorDispositivos][$contador]["descripcion"];
                    if ($contador == 0) {
                        echo ("addMarker($lat, $lon,'Primera posicion ' + '$fecha','icono_ubicaciones_inicio');");
                    } else if ($contador == (count($coordenadasAll[$contadorDispositivos]) - 1)) {
                        echo ("addMarker($lat, $lon,'Ultima posicion ' + '$fecha','icono_ubicaciones_fin');");
                    } else {
                        echo ("addMarker($lat, $lon, '$fecha','icono_ubicaciones');");
                    }
                    $contador++;
                }
            } else {
                echo ("alert(No se encontraron datos de: un dispositivo seleccionado)");
            }
            $aux = json_encode($coordenadasAll[$contadorDispositivos]);
            echo ("var arrayJS = $aux;" );

            $color = '#' . $colorRand[rand(0, 15)] . $colorRand[rand(0, 15)] . $colorRand[rand(0, 15)] . $colorRand[rand(0, 15)] . $colorRand[rand(0, 15)] . $colorRand[rand(0, 15)];

            echo ("var colorLin = '$color';" );

            echo ("document.getElementById('distincion').innerHTML+= '  $descripcion  ' + '<span style=background-color:$color; width:>---</span>';");


            echo ("metLineas(arrayJS, colorLin);" );
//            echo ("metLineas(arrayJS);" );
            $contadorDispositivos++;
        }
    }
}
?>

            }
        </script>

        <script>
            window.jQuery || document.write('<script src="bootstrap/js/vendor/jquery-1.11.2.min.js"><\/script>')
        </script>
        <!--<script src="bootstrap/js/vendor/bootstrap.min.js"></script>-->
        <script src="bootstrap/js/main.js"></script>

        <!-- Archivos DatePicker -->
        <link href="picker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

                <!--<script type="text/javascript" src="picker/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>-->
        <script type="text/javascript" src="picker/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="picker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
        <script type="text/javascript" src="picker/js/locales/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>


        <!-- Archivos DatePicker -->

        <!-- Date Time picker -->

        <script type="text/javascript">
            $('.form_datetime').datetimepicker({
                language: 'es',
                weekStart: 1,
                todayBtn: 1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                forceParse: 0,
                showMeridian: 1
            });
        </script>

        <!--Fin date Time-->


    </body>

</html>

<?php
/* @var $_POST type */
if (isset($_POST['salir'])) {
    session_start();
    // eliminar sesión
    session_destroy();
    echo "<script>
          var pagina='index.php';
              function redireccionar() {
                location.href=pagina
              }
              // este es un tiempo para redireccionar.
              setTimeout ('redireccionar()', 10);
          </script>";
}

function coordenadas() {
    $data = array("usuario_id" => "1", "fecha_inicial" => "2016-08-08 00:00:00", "fecha_final" => "2016-08-10 00:00:00");

    $data_string = json_encode($data);
    //"enlace_id":"2","longitud":"888888.8","latitud":"-8888888.8"
    //url contra la que atacamos
    $ch = curl_init("http://127.0.0.1/api.rs.com/v1/usuarios/listarCoordenadasDeTodosSusGpsPorFecha");
    //a true, obtendremos una respuesta de la url, en otro caso,
    //true si es correcto, false si no lo es
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //establecemos el verbo http que queremos utilizar para la petición
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    //enviamos el array data
    //curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data_string));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string))
    );
    //obtenemos la respuesta
    $response = curl_exec($ch);
    // Se cierra el recurso CURL y se liberan los recursos del sistema
    curl_close($ch);
    if (!$response) {
        return false;
    } else {
        // var_dump($response);
        $string = json_decode($response);
        $arreglo = decodificar($string);
        return $arreglo;
        //var_dump($arreglo);
    }
}

function decodificar($str) {
    $arreglo = array();
    foreach ($str as $indice => $valor) {
        if (is_array($valor) || is_object($valor)) {
            foreach ($valor as $key => $value) {
                array_push($arreglo, array(
                    //"enlace_id" => $value->enlace_id,
                    // "usuario_id" => $value->usuario_id,
                    //"nombre" => $value->nombre,
                    //"detalle_id" => $value->detalle_id,
                    "fecha" => $value->fecha,
                    //"coordenadas_id" => $value->coordenadas_id,
                    "longitud" => $value->longitud,
                    "latitud" => $value->latitud,
                    "gps_id" => $value->gps_id,
                    //"imei" => $value->imei,
                    //"numero" => $value->numero,
                    "descripcion" => $value->descripcion
                ));
            }
        }
    }
    //var_dump($arreglo);
    return $arreglo;
}

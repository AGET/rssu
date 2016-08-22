<?php
require_once('conexion.php');
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>MapMa3</title>
        <style type="text/css">
            body { font: normal 10pt Helvetica, Arial; }
            #map { width: 500px; height: 500px; border: 0px; padding: 0px; }
        </style>
        <!--<script src="http://maps.google.com/maps/api/js?key=AIzaSyC3oc1y6qCfSW5fwq78we77RkBKWmNHWyw" type="text/javascript"></script>-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3oc1y6qCfSW5fwq78we77RkBKWmNHWyw&callback=initMap" async defer>
        </script>
        <script type="text/javascript">

//            var icon = new google.maps.MarkerImage("http://maps.google.com/mapfiles/ms/micons/blue.png",
//                    new google.maps.Size(32, 32), new google.maps.Point(0, 0),
//                    new google.maps.Point(16, 32));
            var center = null;
            var map = null;
            var currentPopup;
            var bounds = new google.maps.LatLngBounds();
//            var bounds = new google.maps.GLatLngBounds();

            function metLineas(datosRuta) {
                var coordenadas = new Array();
                var s = "";
                for (var i = 0; i < datosRuta.length; i++) {
                    coordenadas.push(new google.maps.LatLng(datosRuta[i]["lat"], datosRuta[i]["lng"]));
                    s += datosRuta[i]["lat"] + " | " + datosRuta[i]["lng"] + "\n";
                }
                var lineas = new google.maps.Polyline({
                    path: coordenadas,
                    map: map,
                    strokeColor: '#BB2000',
                    strokeWeight: 4,
                    strokeOpacity: 0.6,
                    clickable: false
                });
                alert(s);
            }


            function addMarker(lat, lng, info, icono) {
                var pt = new google.maps.LatLng(lat, lng);
//                bounds.extend(pt);
                var marker = new google.maps.Marker({
                    position: pt,
//                    icon: 'bootstrap/img/icono_ubicaciones.png',
                    icon: 'bootstrap/img/' + icono + '.png',
                    map: map,
                    title: 'tooltip'
                });


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

            function initMap() {
                map = new google.maps.Map(document.getElementById("map"), {
                    center: new google.maps.LatLng(17.553893, -99.52511),
                    zoom: 14,
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
<?php
$mysqli = new Conexion();
$mysqli = $mysqli->conectar();
$sql = "SELECT * FROM coordenadas";
$arraylineas = array();
if ($result = $mysqli->query($sql)) {
    if ($result->num_rows > 0) {
        $contador = 0;
        mysqli_data_seek($result, 0);
        while ($fila = mysqli_fetch_array($result, MYSQL_ASSOC)) {
            $lon = $fila["longitud"];
            $lat = $fila["latitud"];
            array_push($arraylineas, array(
                "lat" => $lat,
                "lng" => $lon
            ));
            if ($contador == 0) {
                echo ("addMarker($lat, $lon,'Inicio','icono_ubicaciones_inicio');");
            } else if ($contador == ($result->num_rows - 1)) {
                echo ("addMarker($lat, $lon,'Fin','icono_ubicaciones_fin');");
            } else {
                echo ("addMarker($lat, $lon,'X','icono_ubicaciones');");
            }
            $contador++;
        }
        $aux = json_encode($arraylineas);

        echo ("var arrayJS = $aux;" );
        echo ("metLineas(arrayJS);" );
    }
}

/* while ($row = mysql_fetch_array($query)) {
  $stage = $row['latitud'];
  $lon = $row['latitud'];
  $lat = $row['longitud'];
  $route_no = $row['route_no'];
  $route = $row['route'];
  echo ("addMarker($lat, $lon,'<b>Stage:$stage</b><br/><b>Route number</b>:$route_no<br/>');\n");
  } */
?>
//                center = bounds.getCenter();
//                map.fitBounds(bounds);
            }
        </script>

<!--        <script type="text/javascript">
             obtenemos el array de valores mediante la conversion a json del
             array de php
            var arrayJS =
                < ?php echo json_encode($arraylineas); ?>;

//             Mostramos los valores del array
            for (var i = 0; i < arrayJS.length; i++)
            {
                document.write("<br>" + arrayJS[i]["lat"] + " - " + arrayJS[i]["lng"]);
            }
        </script>-->
    </head>

    <!--<body onload="initMap()" style="margin:0px; border:0px; padding:0px;">-->
    <body style="margin:0px; border:0px; padding:0px;">
        <div id="map" style="width: 90%; height: 90%"></div>
    </body>
</html>
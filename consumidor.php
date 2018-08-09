<?php
/**
 * Created by PhpStorm.
 * User: Anibal
 * Date: 8/8/2018
 * Time: 23:05
 */

//URL donde se encuentra nnuestro JSON

$url = 'https://raw.githubusercontent.com/AndyTG/SOAFinal/master/datosVehiculos';

//Variable para leer el archivo
$data = file_get_contents($url);

//Decodificamos el archivo JSON
$datadecod = json_decode($data);


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <title>SOA | FINAL</title>
</head>
<body style="width: 100%;
          height: 100%;
          background-image: url(car.jpg);
          background-position: center center;
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
          background-color: #464646;">
<div class="container mt-5">
    <div style="background-color: rgba(0, 0, 0, 0.8);
                 background: rgba(0, 0, 0, 0.8);"
         class="jumbotron pt-4 pb-4 text-white">
        <h1 class="display-4 text-center">Aplicaciones Orientadas a Servicios</h1>
        <p class="lead text-center">Carolina Gonzalez, Andres Taipe</p>
        <hr class="my-4" style="background: #f9f9f9">
        <p class="text-center">Proyecto Final 2018-A</p>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php
        foreach ($datadecod as $vehiculo) {
            echo

                "<div class='col-4'>
                    <div class='card mb-4 text-white text-center' 
                         style='width: 18rem;
                         background-color: rgba(73, 80, 87, 0.8);
                         background: rgba(73, 80, 87, 0.8);
                         text-decoration: none'>
                        <i class='fas fa-car-alt card-img-top mt-4' style='font-size: 100px'></i>
                        <div class='card-body'>
                            <h5 class='card-title text-center'>" . $vehiculo->modelo . "</h5>
                            <hr class='my-4' style='background: #f9f9f9'>
                            <p class='card-text'>Placa: ".$vehiculo->placa."</p>
                            <p class='card-text'>Año: ".$vehiculo->anio."</p>
                            <p class='card-text'>Capacidad: ".$vehiculo->capacidad." personas</p>
                            <p class='card-text'>Puertas: ".$vehiculo->puertas."</p>
                        </div>  
                    </div>
                </div>";
        }
        ?>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>

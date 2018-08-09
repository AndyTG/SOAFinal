<?php
/**
 * Created by PhpStorm.
 * User: Anibal
 * Date: 8/8/2018
 * Time: 22:08
 */
//Atributos de conexion

$ip = 'localhost';
$bdduser = 'root';
$bddPass = '';
$bddName = 'examen';

//Conexion
$conn = mysqli_connect($ip, $bdduser, $bddPass) or die('No existe conexion');
mysqli_set_charset($conn, 'utf8');
mysqli_select_db($conn, $bddName);

//Intruccion para consulta
$sql = 'SELECT * FROM vehiculo';

//Creamos el Array
$vehiculos = array();

// Ejecutamos la consulta
$consulta = mysqli_query($conn, $sql);

//Recorremos la consulta para ingresar en el array
while ($row = mysqli_fetch_object($consulta)) {
    $vehiculos[] = $row;
}

//Imprimimos el resultado en el navegador
echo 'ARCHIVOS DESDE LA BASE';
echo '<br>';
echo '[';
//recorremos el array
foreach ($vehiculos as $vehiculo) {
    $id = $vehiculo->id;
    $modelo = $vehiculo->modelo;
    $anio = $vehiculo->anio;
    $capacidad = $vehiculo->capacidad;
    $puertas = $vehiculo->puertas;
    $placa = $vehiculo->placa;

    //imprimimos
    echo '<br>';
    echo '{';
    echo 'id : ' . $id . ', ' . 'modelo : ' . $modelo . ', ' . 'anio : ' . $anio . ', ' . 'capacidad : ' . $capacidad . ', ' . 'puertas : ' . $puertas . ', ' . 'placa : ' . $placa;
    echo '}';
    echo '<br>';
}
echo ']';

mysqli_close($conn);

// Creando archivo de los datos obtenidos
$datos = json_encode($vehiculos);

//creamos una funcion para crear el fichero
function crear_file($data)
{
    $file_Name = 'datosVehiculos';
    $flujo = fopen($file_Name, 'w');
    fputs($flujo, $data);
    fclose($flujo);
}

//llamamos a la funcion
crear_file($datos);

?>

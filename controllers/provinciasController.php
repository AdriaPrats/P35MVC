<?php

# CONECTARSE A LA BASE DE DATOS CON PDO
require 'models/geographyPDO.php';
$geo = new GeographyPDO();

# CONECTARSE A LA BASE DE DATOS USANDO MySQL
// require 'models/geography.php';
// $geo = new Geography();

echo "<script> console.log('Controller Provincias: Connection successful!'); </script>";

# CONSULTAR LAS PROVINCIAS
# TODO: Check POST exits or die
$id = $_POST['comunidades'];
// print_r($id);
// echo "<br>";
$data = $geo->getProvincias($id);
// print_r($data);

# PASAR LOS DATOS A LA VISTA COMUNIDADES
require 'views/provincias.php';

?>
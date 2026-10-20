<?php
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$especie=$_POST["especie"];
$genero=$_POST["genero"];
$talla=$_POST["talla"];
$cantidad=$_POST["cantidad"];
$extra=$_POST["extra"];

echo "<h2> Solicitud de adopción recibida</h2>";
echo "<p>Solicitante: $nombre </p>";
echo "<p>Correo: $correo </p>";
echo "---------------------------------<br>";
echo "Mascota que desea: ";
echo "<p>Especie: $especie </p>";
echo "<p>genero: $genero </p>";
echo "<p>talla: $talla </p>";
echo "<p>Número de mascotas que desea adoptar: $cantidad </p>";
echo "<p>Información extra: $extra </p>";

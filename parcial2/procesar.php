<?php
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$pedido=$_POST["pedido"];



echo "
    <header >
        <h2>
            Pedido recibido en Salteneria El Horno
        </h2>
    </header>
    <h3>Datos del pedido:</h3>";
echo "<p>Nombre cliente: $nombre</p>";
echo "<p>Correo cliente: $correo</p>";
echo "------------------------------<br>";
echo "<p>Pedido cliente: $pedido</p>";


$elementos=["Salteña de pollo - Bs 6","Docena de saltenas - Bs 65","Refresco de mocochinchi - Bs 5"];
echo "------------------------------<br>";
echo "<p>Nuestra carta: </p>";
echo "<ul>";
foreach ($elementos as $elemento){
    echo "<li> $elemento</li>";
}
echo "</ul>";
echo "------------------------------<br>";
echo "Te atiende Valeria Lucía Gutiérrez Callejas";
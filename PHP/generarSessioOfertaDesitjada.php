<?php

include "gestionarSessio.php";

$number = $_GET["oferta"];

crearSessionOferta($number);

echo "sessio creada " . $_SESSION["oferta"];
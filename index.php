<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/style_navegation.css">

<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <script src="JavaScript-JQuery/Hora_Data.js" defer></script>
    <script src="JavaScript-JQuery/BTNnaveg.js" defer></script>
    <script src="JavaScript-JQuery/RegistreLogin.js" defer></script>

    <!-- capsalera -->

    <script src="Ajax/CloseSession.js" defer></script>
</head>


<?php
include "PHP/gestionarSessio.php";
?>



<!-- botones de navegacion -->
<body style="overflow-x: hidden">

<?php

if  (isset($_COOKIE["contVisites"])){
    $value =  $_COOKIE["contVisites"];

    $value += + 1;

    setcookie("contVisites", $value, time() + (86400 * 365));

    $message =  "total de visites ";

    $message = $message . $_COOKIE["contVisites"];

    echo "<script>console.log('" . $message . "');</script>";

}

else {
    $value = 1;

    setcookie("contVisites", $value, time() + (86400 * 365));

    echo "<script>console.log('" . "cookie creada" . "');</script>";
}
?>

<header class="d-flex flex-row flex-fill bg-image p-3"
        style="background-image: url('headder.jpeg')">

    <p class="h2 p-3 pt-3 pb-3 text-white">
        FeinaConnecta
    </p>




    <div class="pt-4 d-flex ms-auto mb-3">
        <?php if (!isset($_SESSION["value"])): ?>
            <a href="registreLogin.php">
                <button id="login" class="p-3 bg-primary text-white rounded-2">Log in</button>
            </a>
        <?php else: ?>
            <form>
                <button id="logout" class="p-3 bg-primary text-white rounded-2">Log out</button>
            </form>
        <?php endif; ?>
    </div>



</header>
<div id="botons" class="d-flex flex-fill bg-success pt-3">
    <p id="data" class="text-white ms-5">Carregant...</p>
        <nav class="ms-auto">
        <a class="pt-2 pb-4 ps-5 pe-5 m-3 text-decoration-none text-white botnav" href="index.php">Home</a>
        <a class="pt-2 pb-4 ps-5 pe-5 text-decoration-none text-white botnav" href = 'Ofertes.php'>Ofertes</a>
        <a class="pt-2 pb-4 ps-5 pe-5 text-decoration-none text-white botnav" href='AboutUs.php'>Sobre Nosaltres</a>
    </nav>
</div>
<div class="flex-fill bg-primary p-2"></div>





<!-- el body del codigo -->
<link rel="stylesheet" href="css/style_carousell.css">
<script src="JavaScript-JQuery/Carousell.js" defer></script>
<script src="Ajax/carousellOfertes.js" defer></script>
<script src="Ajax/SeleccionarOferta.js" defer></script>


<div class="d-flex flex-row carousell m-5"   style="justify-content: center">
            <div class="BTN" id="left"><</div>

            <div id="slider">
            <a class="cap enllac" data-numero="1" id="1" href="Oferta.php" style="text-decoration: none">
                <div class="card" style="width: 500px;">
                    <img class="card-img-top imatge"  alt="Card image cap">
                        <div class="card-body w-100" >
                            <h5 class="card-title titol"></h5>
                            <p class="card-text localitzacio"><br></p>
                            <p class="card-text salari"><br></p>
                            <p class="card-text descripcio"><br></p>
                        </div>
                </div>
            </a>

            <a class="cap enllac" id="2" data-numero="2" href="Oferta.php" style="text-decoration: none">
                <div class="card" style="width: 500px;">
                    <img class="card-img-top imatge" alt="Card image cap">
                    <div class="card-body w-100" >
                        <h5 class="card-title titol"></h5>
                        <p class="card-text localitzacio"><br></p>
                        <p class="card-text salari"><br></p>
                        <p class="card-text descripcio"><br></p>
                    </div>
                </div>
            </a>
            <a class="cap enllac" id = "3" data-numero="3" href="Oferta.php" style="text-decoration: none">
                <div class="card" style="width: 500px;">
                    <img class="card-img-top imatge" alt="Card image cap">
                    <div class="card-body w-100" >
                        <h5 class="card-title titol"></h5>
                        <p class="card-text localitzacio"><br></p>
                        <p class="card-text salari"><br></p>
                        <p class="card-text descripcio"><br></p>
                    </div>
                </div>
            </a>
            </div>

            <div class="BTN" id="right" >></div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

<!-- footer de les pagines -->
<footer class="flex-fill w-100">
    <div class="flex-fill bg-success p-2"></div>
    <div class="lex-fill d-flex flex-row-reverse bg-white">
        <div class="row container-fluid w-100">

            <div id="info" class="col-4 pt-1">Raúl Mutuberría Sánchez
                <br>
                2023
            </div>

            <div id="logos" class="col-2 ms-auto">
                <svg xmlns="http://www.w3.org/2000/svg"  height="40" fill="currentColor" class="bi bi-c-circle text-black" viewBox="0 0 16 16">
                    <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.146 4.992c-1.212 0-1.927.92-1.927 2.502v1.06c0 1.571.703 2.462 1.927 2.462.979 0 1.641-.586 1.729-1.418h1.295v.093c-.1 1.448-1.354 2.467-3.03 2.467-2.091 0-3.269-1.336-3.269-3.603V7.482c0-2.261 1.201-3.638 3.27-3.638 1.681 0 2.935 1.054 3.029 2.572v.088H9.875c-.088-.879-.768-1.512-1.729-1.512"/>
                </svg>

                <a href="https://www.instagram.com"  class="text-black" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg"  height="40" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                    </svg>
                </a>
                <a href="https://twitter.com" class="text-black" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg"  height="40" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="flex-fill bg-success p-2"></div>
</footer>
</html>
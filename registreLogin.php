<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>


    <script src="JavaScript-JQuery/RegistreLogin.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script
            src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous">
    </script>

    <script src="Ajax/LoginAjax.js" defer></script>
    <script src="Ajax/RegistreAjax.js" defer></script>


</head>

<?php
include "PHP/gestionarSessio.php";
?>

<body>
<section id="loginF">
    <div class="container-fluid">
        <div class="border border-success border-4 border-3 m-5">
        <div class="d-flex justify-content-center">
            <div class="mt-4 text-center">
                <p class="font-weight-bolder h2">Formulari de Log in</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="w-50 m-4">
                <form class=" bg-success" >
                    <div class="container-fluid d-flex p-3" id="totlogin">
                    </div>


                    <!-- Email -->
                    <div class="ps-5 pe-5 mt-2" id="UserL" data-mdb-input-init="" data-mdb-input-initialized="true">
                        <p>Nom d'usuari</p>
                        <label>
                            <input type="text" id="UserName" class="w-100 me-5" placeholder="Introdueixi un nom d'usuari">
                        </label>
                    </div>

                    <!-- Password -->
                    <div class="ps-5 pe-5 mt-2" id="PasswordL" data-mdb-input-init="" data-mdb-input-initialized="true">
                        <p>Password</p>
                        <label>
                            <input type="password" id="Password" placeholder="Introdueixi contrasenya" class="w-100 me-5">
                        </label>
                    </div>



                    <div class="d-flex justify-content-center pb-3">
                        <button id="LogBtn"  type="button" class="m-2 rounded ps-5 pe-5 bg-info">Log in</button>
                        <p id="message"></p>
                    </div>

                    <!-- contenidor per al canvi de color part de abaix -->
                    <div class="container-fluid d-flex bg-warning p-4">
                        <!-- Display with login and password recovery form links -->
                        <div class="row container-fluid">
                            <!-- Remember user -->
                            <div class="col-6">
                                <label>
                                    <input type="checkbox" class="form-check-input">
                                </label>
                                <label class="form-check-label">Recorda l'usuari</label>
                            </div>

                            <div id="caixaAlerta"></div>

                            <!-- Recover password -->
                            <div class="col-6 d-flex justify-content-end align-items-center">
                                <a href="" class="canvi text-start" id="donaAlta">Dona't d'alta</a>
                            </div>
                            <div>
                                <a href="index.php"  class="text-end">Torna al menú</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</section>


<section id="signupF">
    <div class="container-fluid">
        <div class="border border-success border-4 border-3 m-5">
            <div class="d-flex justify-content-center">
                <div class="mt-4 text-center">
                    <p class="font-weight-bolder h2">Formulari de Sign up</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="w-auto m-4">





                    <form id="formulari" class=" bg-success">
                        <div id="RegistreTrue"></div>

                        <div id="nomsRegistre" class="container-fluid d-sm-flex p-3">
                            <div class="row flex-fill">
                                <div  class="ps-5 pt-3 col" data-mdb-input-init="" data-mdb-input-initialized="true">
                                    <label for="firstname">First name</label>
                                    <input type="text" id="firstname">
                                </div>
                            </div>
                            <div>
                                <div class="ms-2 pe-5 pt-3" data-mdb-input-init="" data-mdb-input-initialized="true">
                                    <label for="lastname">Last name</label>
                                    <input type="text" id="lastname">
                                </div>
                            </div>
                        </div>



                        <div class="ps-5 pe-5 mt-2" id="correuElectronic"  data-mdb-input-init="" data-mdb-input-initialized="true">
                            <p>Email address</p>
                            <label>
                                <input id="emailN" type="email" class="w-100 me-5" placeholder="Introdueixi un correu electronic">
                            </label>
                        </div>

                        <div class="ps-5 pe-5 mt-2" id="nomUsuari"  data-mdb-input-init="" data-mdb-input-initialized="true">
                            <p>User Name</p>
                            <label>
                                <input id="nomusuariN" type="text" placeholder="Introdueixi un nom d'usuari" class="w-100 me-5">
                            </label>
                        </div>


                        <div id="contrasenyesRegistre"  class="d-flex ms-5">
                            <div class="mt-2"> Password
                                <div class="row d-sm-flex flex-fill">
                                    <div data-mdb-input-initialized="true" class="w-auto">
                                        <label>
                                            <input id="passwordN" type="password" placeholder="Introdueixi una contrasenya">
                                        </label>
                                    </div>

                                    <div  data-mdb-input-initialized="true" class="w-auto mb-4">
                                        <label></label>
                                        <label>
                                            <input id="passwordNV" type="password" placeholder="tornila a introduir">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="botoSignupRegistre" class="d-flex justify-content-center pb-3">
                            <button  type="button" class="m-2 rounded ps-5 pe-5 bg-info" id="signupBTN">Sign up</button>
                            <p id="Rmessage"></p>
                        </div>

                    </form>





                    <div class="container-fluid d-flex bg-warning p-4">

                            <div id="yellowContainer" class="row flex-fill">




                                <div class="col-6" id="yellowContainer">
                                    <a href="" class="canvi" id="iniciaSessio">Initcia la sesió</a>
                                </div>
                            </div>
                        </div>




                </div>
            </div>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


</body>
</html>
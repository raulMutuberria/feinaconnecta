<?php

$servername = "localhost";
$username = "root";
$password = "super3";
$dbname = "jobs";

$name = $_GET["name"];
$surname = $_GET["surname"];
$email = $_GET["email"];
$user = $_GET["user"];
$pass = $_GET["pass"];
$passVal = $_GET["passValidation"];

if ($name != "" && $surname != "" && $email != "" && $user != "" && $pass != "" && $passVal != "") {
    if ($pass == $passVal) {
        try {

            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT nom FROM users WHERE (user = '$user') and (password = '$pass')");
            $stmt->execute();

            $arr = $stmt->fetchAll();

            if (isset($arr[0]["nom"])) {
                //crear la sesio
                echo "L'usuari ya existeix a la base de dades";

            } else {

                $sql = "INSERT INTO users (nom, cognom, password, email, user) VALUES ('$name', '$surname' , '$pass', '$email', '$user')";
                $conn->exec($sql);

                include 'gestionarSessio.php';
                crearSession($user);

                echo "";
            }

        } catch (PDOException $e) {
            console_log($e->getMessage());
            echo "";
        }
        $conn = null;
    }
    else {
        echo "Les contrasenyes no coincideixen";
    }
}
else {
    echo "Totes els camps han de estar declarats";
}
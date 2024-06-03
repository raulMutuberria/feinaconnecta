<?php
$servername = "localhost";
$username = "root";
$password = "super3";
$dbname = "jobs";


$user = $_GET["user"];
$pass = $_GET["pass"];

try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT nom, cognom FROM users WHERE (user = '$user') and (password = '$pass')");
    $stmt->execute();

    $arr = $stmt->fetchAll();

    if(isset($arr[0]["nom"])){
        //crear la sesio
        $string = $arr[0]["nom"];
        $string = $string . " " . $arr[0]["cognom"];

        include 'gestionarSessio.php';
        crearSession($user);

        echo $string;

    }
    else {
       echo "";
    }

} catch (PDOException $e) {
    console_log($e->getMessage());
    echo "";
}
$conn = null;


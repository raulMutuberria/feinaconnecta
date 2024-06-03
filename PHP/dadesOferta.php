<?php
include "gestionarSessio.php";

$servername = "localhost";
$username = "root";
$password = "super3";
$dbname = "jobs";




if (isset($_SESSION["oferta"])) {
    $id = intval($_SESSION["oferta"]);
}
else {
    $id = 0;
}
    try {
        // Crear una conexión PDO

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT id, titol, imatge, descripcio, localitzacio, salari, web FROM ofertes WHERE id = '$id'");
        $stmt->execute();

        $arr = $stmt->fetchAll();

        // Comprobar si hay resultados
        if (isset($arr)) {
            // Convertir el array de resultados a JSON y mostrarlo
            echo json_encode($arr);
        } else {
            // Si no hay resultados, devolver un JSON vacío
            echo json_encode([]);
        }
    } catch (PDOException $e) {
        // Manejar errores
        error_log($e->getMessage());
        echo json_encode(['error' => 'Database error']);
    }
// Cerrar la conexión
$conn = null;

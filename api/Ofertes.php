<?php
$servername = "localhost";
$username = "root";
$password = "super3";
$dbname = "jobs";

try {
    // Crear una conexión PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT DISTINCT id, titol, imatge, descripcio, localitzacio, salari, web FROM ofertes");
    $stmt->execute();

    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC); // Obtener resultados solo con claves asociativas

    // Comprobar si hay resultados
    if (!empty($arr)) {
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
?>
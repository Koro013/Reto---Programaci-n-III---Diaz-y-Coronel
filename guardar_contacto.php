<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $asunto = $_POST['asunto'] ?? '';
    $mensaje = $_POST['mensaje'] ?? '';

    $sql = 'INSERT INTO contactos (nombre, correo, asunto, mensaje) VALUES (:nombre, :correo, :asunto, :mensaje)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nombre' => $nombre,
        ':correo' => $correo,
        ':asunto' => $asunto,
        ':mensaje' => $mensaje,
    ]);
    header('Location: contacto.html?enviado=1');
    exit;
}
?>

<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $edad = $_POST["edad"];
    $grado = $_POST["grado"];
    $asistencia = $_POST["asistencia"];
    $matricula = $_POST["matricula"];
    

    $sql = "UPDATE usuarios SET nombre='$nombre', email='$email', edad='$edad', grado='$grado', asistencia='$asistencia', matricula='$matricula' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error al actualizar el usuario: " . $conn->error;
    }

    $conn->close();
}
?>
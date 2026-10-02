<?php
include 'conexion.php';
//include 'crear.php'

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"]; 
    $edad = $_POST["edad"];
    $grado = $_POST["grado"];
    $asistencia = $_POST["asistencia"];
    $matricula = $_POST["matricula"];

    if ($edad >=0){
        $sql = "INSERT INTO usuarios (nombre, email, edad, grado, asistencia, matricula) VALUES ('$nombre', '$edad', '$email', '$grado', '$asistencia', '$matricula')";
    } else {
        echo "No puedes poner una edad negativa<br>";
        //<a href="crear.php">Volver al formulario</a>
?>
        <!--<a href="crear.php">Volver al formulario</a> -->
        
<?php
    echo '<a href="javascript:history.back()">Volver al formulario</a>';
    }
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error al agregar el usuario: " . $conn->error;
    }

    $conn->close();
}
?>

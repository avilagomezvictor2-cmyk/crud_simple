<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <?php
    include 'conexion.php';

    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        $sql = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $nombre = $row["nombre"];
            $email = $row["email"];
            $edad = $row["edad"];
            $grado = $row["grado"];
            $asistencia = $row["asistencia"];
            $matricula = $row["matricula"];
            
        } else {
            echo "Usuario no encontrado.";
            exit;
        }
    } else {
        echo "ID de usuario no especificado.";
        exit;
    }
    ?>
    <form action="actualizar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br><br>
        <label for="edad">Edad:</label>
        <input type="int" id="edad" name="edad" value="<?php echo $edad; ?>" required><br><br>
        <label for="grado">Grado:</label>
        <input type="txt" id="grado" name="grado" value="<?php echo $grado; ?>" required><br><br>
        <label for="asistencia">Asistencia:</label>
        <input type="int" id="asistencia" name="asistencia" value="<?php echo $asistencia; ?>" required><br><br>
        <label for="matricula">Matricula:</label>
        <input type="int" id="matricula" name="matricula" value="<?php echo $matricula; ?>" required><br><br>
        <input type="submit" value="Actualizar">
    </form>
    <a href="index.php">Volver a la lista</a>
</body>
</html>

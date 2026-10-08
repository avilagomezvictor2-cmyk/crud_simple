<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Usuario</title>
</head>
<body>
    <h1>Agregar Usuario</h1>
    <form action="guardar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+" title="El nombre solo puede contener letras"required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" min="0" max="100" oninput="if(this.value < 0) this.value = 0; if(this.value > 100) this.value = 100;"required><br><br>
        
        <label for="grado">Grado:</label>
        <input type="text" id="grado" name="grado" required><br><br>
        
        <label for="asistencia">Asistencias:</label>
        <input type="number" id="asistencia" name="asistencia" min="0" oninput="if(this.value < 0) this.value = 0;"required><br><br>
        
        <label for="matricula">Matricula:</label>
        <input type="number" id="matricula" name="matricula" min="0" oninput="if(this.value < 0) this.value = 0;"required><br><br>        
        
        <input type="submit" value="Guardar">
    </form>
    <a href="index.php">Volver a la lista</a>
</body>
</html>
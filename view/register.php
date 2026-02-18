<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar Usuario</title>
</head>
<body>
    
    
<h1>Registrar Nuevo Usuario</h1>
<form action="index.php" method="POST">
<input type="hidden" name="action" value="register">
<label for="username">Usuario:</label>
<input type="text" name="username" id="username" required>
<br>
<label for="password">Contrasena:</label>
<input type="password" name="password" id="password" required>
<br>
<button type="submit">Registrar</button>
</form>

<hr>
<a href="../index.php">Volver al login</a>

    </form>


</body>
</html>
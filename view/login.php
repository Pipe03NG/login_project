<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>
    <h1>Iniciar Sesion</h1>
    <form action="index.php" method="POST">
        <input type="hidden" name="action" value="login">
        <label for="username">Usuario: </label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Contraseña: </label>
        <input type="password" name="password" id="password" required>
        kbr>
        <button type="submit">Iniciar Sesion</button>
    </form>

    <hr>
    <a href="view/register.php">Registrarse</a>
</body>

</html>
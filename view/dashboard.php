<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    
    <h1>Bienvenido al Dashboard</h1>
    <p>Usuario: <?php echo htmlspecialchars($_SESSION["user"]["username"]);?></p>
    <a href="index.php?action=logout">Cerrar Sesiòn</a>

</body>
</html>
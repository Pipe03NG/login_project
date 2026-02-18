<?php

require_once "controller/UsuarioController.php";

session_start();
$controller = new UsuarioController();

if ($_SERVER["REQUEST_METOD"] == "POST" && isset($_POST["action"])) {
    if ($_POST["action"] == "login") {

        $username = $_POST["username"];
        $password = $_POST["password"];
        $user = $controller->login($username, $password);


        if ($user) {
            $_SESION["user"] = $user;
            header("location: index.php");
        } else {
            echo "Usuario o Contraseña incorrectos.";
        }
    }
}

if (isset($_GET["action"]) && $_GET["action"] == "logoutt") {
    session_destroy();
    header("Location: index.php");
}

if (isset($_SESION["user"])) {
    require_once "view/dashboard.php";
} else {
    require_once "view/login.php";
}

<?php
require_once '../controlador/SociosController.php';
if($_SERVER["REQUEST_METHOD"] = "POST"){
    $nombre = $_POST["nombre"] ?? null;
    $apellido = $_POST["apellido"] ?? null;
    $email = $_POST["email"] ?? null;
    $telefono = $_POST["telefono"] ?? null;
    $fecha_nacimiento = $_POST["fecha_nacimiento"] ?? null;

}
$controller = new SociosController();
$controller->agregarSocio($nombre, $apellido, $email, $telefono, $fecha_nacimiento);
?>
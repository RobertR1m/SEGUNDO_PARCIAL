<?php

require_once "conexion.php";

$correo = $_POST ["email"];
$password = $_POST ["password"];

if(!isset ($correo) || empty($correo)){
    echo "Debes rellenar el campo correo";
}

if(!isset ($password) || empty($password)){
    echo "Debes rellenar el campo contraseña";
}

$consulta = "SELECT * FROM usuarios WHERE email = '$correo' AND password = '$password'";
$resultado = mysqli_query ($conexion,$consulta);
$registros = mysqli_num_rows ($resultado);

if ($registros > 0) {
    $row = mysqli_fetch_assoc($resultado);
    $genero = $row["gender"];
    $estado = $row["state"];
    $ciudad = $row["city"];

    if ($genero === "M") {
        $saludo = "Bienvenido";
    } else {
        $saludo = "Bienvenida";
    }
    echo $saludo . " " . $correo . " Vives en " . $ciudad . ", " . $estado;
    } else {
    echo "Usuario incorrecto";
}
?>
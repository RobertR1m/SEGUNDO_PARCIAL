<?php
extract($_POST);

if (!isset($_POST['register'])){
    header("Location: ../");
    exit();
}

require_once '../../lib/conexion.php';
$query = "UPDATE usuarios SET name = '$nombre', email = '$correo', password = '$pass', phone = '$telefono', addres = '$direccion',
city = '$ciudad', state = '$estado' WHERE id = $id";

mysqli_query ($conexion, $query);
header("Location: ../");
?>
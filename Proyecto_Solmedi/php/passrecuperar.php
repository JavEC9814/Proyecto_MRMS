<?php

include 'Database.php';

$correo = $_POST['correo'];

$consulta = mysqli_query($conn,"SELECT * FROM usuario where correo_usuario = '$correo'");
$resultado = mysqli_num_rows($consulta);

if($resultado){
    $datos = mysqli_fetch_array($consulta);
    $pass = $datos['contraseña'];
    $name = $daots['nombre_usuario'];

    print_r($pass);
    print_r($name);
    
}

?>
<?php


include 'Database.php';

$correo = $_POST['correo'];

$consulta2 = mysqli_query($conn, "SELECT * FROM usuario where correo_usuario = '$correo'");
$resultado2 = mysqli_num_rows($consulta2);

if ($resultado2){
    $datos = mysqli_fetch_array($consulta2);
    $pass = $datos['contraseña'];
    $name = $datos['nombre_usuario'];

    $enviarcorreo = $correo;
    $titulo = "Recuperar contraseña2";
    $msg1 = "Buen dia Señor(a) ".$name." Tu contraseña es: ".$pass;
    $msg2 = "Recuerda no compartir esta informacion con ninguna persona"."\n".
                "Buen dia, ATT: Solmedi";
    $tucorreo = "From: solmedisas@gmail.com";



    if(mail($enviarcorreo,$titulo,$msg1,$msg2,$tucorreo)){
        print_r($pass); 
        print_r($name); 
        echo "asdasdasd"; '
        <script> 
            alert("Correo enviado con exito!!") windows.location="../Proyecto_Solmedi/index.html"
            </script>
            ';
    }else{
        echo'<script> alert("Error, no fue posible enviar el correo. Intente nuevamente") windows.location="../../Proyecto_Solmedi/pages/recuperar_Solmedi.html"</script>';  


        
    }
}else{
    echo'<script> alert("El correo no se encuentra en la base de datos, verifique por favor") windows.location="../../Proyecto_Solmedi/pages/recuperar_Solmedi.html"</script>';
}
?>
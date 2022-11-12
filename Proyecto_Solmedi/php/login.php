<?php
include 'Database.php';
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$consulta="SELECT*FROM usuario where nombre_usuario ='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:../../Proyecto_Solmedi/pages/inicio_Solmedi.php");

}else{
  echo '
  <script>
    alert("Datos incorrectos - Por favor verifique nuevamente o registrese en el siguiente formato")
  </script>
  ';
    ?>
    
    <?php
    include("../../Proyecto_Solmedi/pages/signup_Solmedi.html");

  ?>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conn);

?>
<?php
    include 'Database.php';
    $id_ser = $_POST['idser'];
    $t_serv = $_POST['tiserv'];
    $fecha = $_POST['fechaten'];
    $hora = $_POST['hoaten'];

    $sql = "INSERT INTO servicio (id_servicio, tipo_servicio, fecha_atencion,hora_atencion) 
    VALUES ($id_ser,'$t_serv','$fecha','$hora')";

/*    $sql2 = "SELECT * FROM  servicio where id_servicio = '$id_ser'";

    //$ver_documento = mysqli_query($conn, "SELECT * FROM paciente WHERE doc_paciente = '$doc_paciente'");
/*
if(mysqli_num_rows($ver_documento) > 0){
    echo'
    <script>
    alert("Documento ya registrado, verifique nuevamente")
    window.location = "../../Proyecto_Solmedi/pages/inicio_Solmedi.html"
    </script>
    ';
    exit();
  }*/

  $ejecu = mysqli_query($conn, $sql);

  if($ejecu){
    echo '
    <script>
      alert("Servicio agregado correctamente")
      window.location = "../../Proyecto_Solmedi/pages/registro_datos_Solmedi.php"
    </script>
    ';

}else{
  echo '
  <script>
    alert("Eror - No fue posible cargar los datos - intente nuevamente")
    window.location = "../../Proyecto_Solmedi/pages/registro_servicio_Solmedi.php"
  </script>
  
  ';
}
mysqli_close($conn);

?>
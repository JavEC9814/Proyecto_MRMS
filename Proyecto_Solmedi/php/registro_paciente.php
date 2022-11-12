<?php
    include 'Database.php';
    $doc_paciente = $_POST['numdoc'];
    $tipo_documento = $_POST['docu'];
    $nombre = $_POST['nom'];
    $apellido = $_POST['apell'];
    $genero = $_POST['gen'];
    $fecha_nacimiento = $_POST['naci'];
    $telefono = $_POST['tel'];
    $direccion = $_POST['direc'];
    $ciudad = $_POST['ciu'];
    $EPS = $_POST['eps'];

    $sql = "INSERT INTO paciente (doc_paciente, tipo_documento, nombre, apellido, genero, fecha_nacimiento, telefono, direccion,ciudad_paciente, EPS) 
    VALUES ($doc_paciente,'$tipo_documento','$nombre','$apellido','$genero','$fecha_nacimiento',$telefono,'$direccion','$ciudad','$EPS')";

    $ver_documento = mysqli_query($conn, "SELECT * FROM paciente WHERE doc_paciente = '$doc_paciente'");

if(mysqli_num_rows($ver_documento) > 0){
    echo'
    <script>
    alert("Documento ya registrado, verifique nuevamente")
    window.location = "../../Proyecto_Solmedi/pages/inicio_Solmedi.php"
    </script>
    ';
    exit();
  }

  $ejecu = mysqli_query($conn, $sql);

  if($ejecu){
    echo '
    <script>
      alert("Datos agregados correctamente")
      window.location = "../../Proyecto_Solmedi/pages/registro_servicio_Solmedi.php"
    </script>
    ';

}else{
  echo '
  <script>
    alert("Eror - No fue posible cargar los datos - intente nuevamente")
    window.location = "../../Proyecto_Solmedi/pages/registro_paciente_Solmedi.php"
  </script>
  
  ';
}
mysqli_close($conn);

?>
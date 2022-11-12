<?php
    include 'Database.php';
    $id_hc = $_POST['idhc'];
    $docu_pa = $_POST['docpa'];
    $nombre_enfer = $_POST['nom_enfer'];
    $id_ser = $_POST['Id_ser'];
    $descripcion = $_POST['des_ser'];
    $diagno = $_POST['diag'];
    $examen = $_POST['exa_fis'];



    $sql = "INSERT INTO `historia_clinica`(`id_hc`, `descripcion_servicio`, `diagnostico`, `examen_fisico_inicial`, `id_servicio`, `doc_paciente`, `nombre_usuario`) 
    VALUES ($id_hc,'$descripcion','$diagno','$examen',$id_ser,$docu_pa,'$nombre_enfer')";

  $ejecu = mysqli_query($conn, $sql);


  if($ejecu){
    echo '
    <script>
      alert("Datos agregados correctamente")
      window.location = "../../Proyecto_Solmedi/pages/inicio_Solmedi.php"
    </script>
    ';

}else{
  echo '
  <script>
    alert("Eror - No fue posible cargar los datos - intente nuevamente")
    window.location = "../../Proyecto_Solmedi/pages/registro_datos_Solmedi.php"
  </script>
  
  ';
}
mysqli_close($conn);

?>
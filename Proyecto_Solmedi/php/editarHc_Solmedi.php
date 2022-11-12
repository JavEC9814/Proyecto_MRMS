<?php
    include 'Database.php';

    $id_hc = $_POST['id_hc'];
    $descripcion_servicio = $_POST['descripcion_servicio'];
    $diagnostico = $_POST['diagnostico'];
    $examen_fisico_inicial = $_POST['examen_fisico_inicial'];
    $id_servicio = $_POST['id_servicio'];
    $doc_paciente = $_POST['doc_paciente'];
    $nombre_usuario = $_POST['nombre_usuario'];

    $sql = "UPDATE `historia_clinica` SET `id_hc`= '$id_hc',
                                        `descripcion_servicio`='$descripcion_servicio',
                                        `diagnostico`='$diagnostico',
                                        `examen_fisico_inicial`='$examen_fisico_inicial',
                                        `id_servicio`='$id_servicio',
                                        `doc_paciente`='$doc_paciente',
                                        `nombre_usuario`='$nombre_usuario' 
            WHERE `doc_paciente` = '$doc_paciente'";

    $ejecu = mysqli_query($conn, $sql);

    if($ejecu){
        echo '
        <script>
          alert("Datos actualizados correctamente")
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
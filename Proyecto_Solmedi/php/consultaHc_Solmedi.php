<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF"
            crossorigin="anonymous">
</head>
<body>


<?php
include_once('../../Proyecto_Solmedi/php/header.php');
?>



<div style="float: right; width: 80%; height: 100%; ">

<nav   class="navbar navbar-light bg-light">

<form class="d-flex" action="../../Proyecto_Solmedi/pages/consultar_Solmedi.php" method="POST" >
    <div>
    <input class="btn btn-outline-danger" type="submit" value="volver">
    </div>
</form>

</nav>

        <table class="table">

            <thead>
              <tr>
                  <br>
                <th scope="col">id_hc</th>
                <th scope="col">descripcion_servicio</th>
                <th scope="col">diagnostico</th>
                <th scope="col">examen_fisico_inicial</th>
                <th scope="col">id_servicio</th>
                <th scope="col">doc_paciente</th>
                <th scope="col">Enfermer@</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include '../../Proyecto_Solmedi/php/Database.php';
              $ident=$_GET["doc_paciente"];
              $query="SELECT * from `historia_clinica` WHERE `doc_paciente`='$ident'" ;
              $resultado=mysqli_query($conn,$query);

              while($mostrar=mysqli_fetch_array($resultado)){
              ?>
              <tr>
                <td><?php echo $mostrar['id_hc']?></td>
                <td><?php echo $mostrar['descripcion_servicio']?></td>
                <td><?php echo $mostrar['diagnostico']?></td>
                <td><?php echo $mostrar['examen_fisico_inicial']?></td>
                <td><?php echo $mostrar['id_servicio']?></td>
                <td><?php echo $mostrar['doc_paciente']?></td>
                <td><?php echo $mostrar['nombre_usuario']?></td>
              </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
</div>



<?php
include_once('../../Proyecto_Solmedi/php/desplegable.php');
?>


<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
        crossorigin="anonymous"></script>

</body>
</html>
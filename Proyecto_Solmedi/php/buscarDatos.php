

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
<!--
    <nav   class="navbar navbar-light bg-light">
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <input class="btn btn-outline-success" action="../../Proyecto/php/buscarDatos.php" name="busc" type="submit" value="Consultar">
        </form>
    </nav> -->

    <nav   class="navbar navbar-light bg-light">

        <form class="d-flex" action="../../Proyecto_Solmedi/php/buscarDatos.php" method="POST">
            <input class="form-control me-2" name="busc" type="search" placeholder="Buscar" aria-label="Search">
            <input class="btn btn-outline-success"   style= "marginleft=2px" type="submit" value="Consultar">
        </form>
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
                <th scope="col">N°</th>
                <th scope="col">doc_paciente</th>
                <th scope="col">tipo_documento</th>
                <th scope="col">nombre</th>
                <th scope="col">apellido</th>
                <th scope="col">genero</th>
                <th scope="col">fecha_nacimiento</th>
                <th scope="col">telefono</th>
                <th scope="col">direccion</th>
                <th scope="col">EPS</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include '../../Proyecto_Solmedi/php/Database.php';
              $buscar = $_POST['busc'];
              $sql = "SELECT * from `paciente` WHERE `doc_paciente`= '$buscar'";
              $resultado=mysqli_query($conn,$sql);

              while($mostrar=mysqli_fetch_array($resultado)){
              ?>
              <tr>
              <td><?php echo $mostrar['ident_pac']?></td>
              <td><?php echo $mostrar['doc_paciente']?></td>
              <td><?php echo $mostrar['tipo_documento']?></td>
              <td><?php echo $mostrar['nombre']?></td>
              <td><?php echo $mostrar['apellido']?></td>
              <td><?php echo $mostrar['genero']?></td>
              <td><?php echo $mostrar['fecha_nacimiento']?></td>
              <td><?php echo $mostrar['telefono']?></td>
              <td><?php echo $mostrar['direccion']?></td>
              <td><?php echo $mostrar['EPS']?></td>
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
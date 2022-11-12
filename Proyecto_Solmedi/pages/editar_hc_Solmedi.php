<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shorcut icon" type="image/x-icon" href="../assets/img/pestaña.JPG"> 
    <link rel="stylesheet" href="../assets/css/estilos_registro.css"> 
    <title>Actualizacion paciente</title>

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
                <th scope="col"></th>
                <th scope="col">Id de la HC</th>
                <th scope="col">Descripcion del servicio</th>
                <th scope="col">Diagnostico</th>
                <th scope="col">Examen fisico</th>
                <th scope="col">Id del servicio</th>
                <th scope="col">Documento del paciente</th>
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

              <form action="../../Proyecto_Solmedi/php/editarHc_Solmedi.php" method="POST">
              
              <td>
                <td><input class="form-control" name="id_hc" value="<?php echo $mostrar['id_hc']?>" readonly></td>
                <td><input class="form-control" type="text" name="descripcion_servicio" value="<?php echo $mostrar['descripcion_servicio']?>" required></td>
                <td><input class="form-control" type="text" name="diagnostico" value="<?php echo $mostrar['diagnostico']?>" required></td>
                <td><input class="form-control" type="text" name="examen_fisico_inicial" value="<?php echo $mostrar['examen_fisico_inicial']?>" required></td>
                <td><input class="form-control" name="id_servicio" value="<?php echo $mostrar['id_servicio']?>" readonly></td>
                <td><input class="form-control" name="doc_paciente" value="<?php echo $mostrar['doc_paciente']?>" readonly></td>
                <td><input class="form-control" name="nombre_usuario" value="<?php echo $mostrar['nombre_usuario']?>" readonly></td>
              <!-- <input type="text" value="<?php echo $mostrar['id_hc']?>" readonly> -->

                <td>
                <input class="btn btn-outline-success" type="submit" value="Actualizar ">
                <!--
                <button  type="button" style="border-radius: 5px; background-color: #268E00;">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                </svg>
                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                </svg>
                </button>-->
                </td>
                
                </td>
              </form>
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
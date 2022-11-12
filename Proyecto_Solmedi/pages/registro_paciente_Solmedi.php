<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF"
          crossorigin="anonymous">
        <link rel="shorcut icon" type="image/x-icon" href="../assets/img/pestaña.JPG"> 
        <link rel="stylesheet" href="../assets/css/estilos_registro.css"> 
        <title>Solmedi</title>
    </head>

    <body class=" navbar-light bg-light">
      
    <?php
      include_once('../../Proyecto_Solmedi/php/header.php');
    ?>

    <?php
      include_once('../../Proyecto_Solmedi/php/desplegable.php');
      
    ?>

        
        <div class="dropdown" >

          <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="../../Proyecto_Solmedi/index.html">Cerrar sesion</a></li>
          </ul>
        </div>
      </div>
      
      <div id="div1">
        <form class="row g-3" action="../../Proyecto_Solmedi/php/registro_paciente.php"  method="POST" >
          <div class="col-md-2">
            <label class="form-label" >Tipo de documento</label>
            <select type="text" class="form-select" name="docu" required>
              <option selected>seleccione el tipo de documento</option>
                <?php 
                  include ("../php/Database.php");
                  $tipo = "SELECT * FROM tipo_doc order by id_doc";
                  $tipo2 = mysqli_query($conn,$tipo);

                  while($row = mysqli_fetch_array($tipo2)){
                    $id_doc = $row['id_doc'];
                    $doc = $row['doc'];
                  ?>
                  <option value = "<?php echo $doc;?>"><?php echo $doc; ?></option>
                  <?php
                  } 
                ?> 
            </select>
          </div>

          <div class="col-md-2">
            <label class="form-label">Documento del paciente</label>
            <input type="number" class="form-control" placeholder="Numero de documento" name="numdoc" required>
          </div>

          <div class="col-md-2">
            <label class="form-label">Nombres paciente</label>
            <input type="text" class="form-control" name="nom" required >
          </div>

          <div class="col-md-2">
            <label class="form-label">Apellidos paciente</label>
            <input type="text" class="form-control" name="apell" value="">
          </div>

          <div class="col-md-2">
            <label class="form-label">Genero</label>
            <select type="text" class="form-select" name="gen" required>
              <option selected>Seleccionar genero</option>
              <?php 
                  include ("../php/Database.php");
                  $tipo = "SELECT * FROM genero order by id_gen";
                  $tipo2 = mysqli_query($conn,$tipo);

                  while($row = mysqli_fetch_array($tipo2)){
                    $id_gen = $row['id_gen'];
                    $gen = $row['gen'];
                  ?>
                  <option value = "<?php echo $gen;?>"><?php echo $gen; ?></option>
                  <?php
                  } 
                ?> 
            </select>
          </div>

          <div class="col-md-4">
            <label class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" name="naci" required>
          </div>

          <div class="col-md-2">
              <label class="form-label">Ciudad</label>
              <input type="text" class="form-control" name="ciu" required>
          </div>

          <div class="col-md-2">
              <label class="form-label">Dirección paciente</label>
              <input type="text" class="form-control" name="direc" required>
          </div>

          <div class="col-md-2">
              <label class="form-label">Telefono paciente</label>
              <input type="number" class="form-control" name="tel" required>
          </div>

          <div class="col-md-4">
              <label class="form-label">EPS</label>
              <select type="text" class="form-select" name="eps" required>
                <option selected>Seleccionar una EPS</option>
                <?php 
                  include ("../php/Database.php");
                  $tipo = "SELECT * FROM eps order by id_eps";
                  $tipo2 = mysqli_query($conn,$tipo);

                  while($row = mysqli_fetch_array($tipo2)){
                    $id_eps = $row['id_eps'];
                    $eps = $row['eps'];
                  ?>
                  <option value = "<?php echo $eps;?>"><?php echo $eps; ?></option>
                  <?php
                  } 
                ?> 
              </select>
            </div>


            <div class="col-12">
              <input class="btn btn-outline-dark" type="submit" value="Siguiente">
                <!--<a class="btn btn-outline-dark" href="../../Proyecto/pages/registro_datos_Solmedi.html">Siguiente</a>-->
                <!--<button type="button" class="btn btn-outline-dark" href="../../Proyecto/pages/recuperar_Solmedi.html">Siguiente</button>-->
            </div>
        </form>
      </div>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
    </body>
</html>
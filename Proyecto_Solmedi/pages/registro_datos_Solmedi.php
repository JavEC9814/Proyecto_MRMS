<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF"
            crossorigin="anonymous">
            <link rel="shorcut icon" type="image/x-icon" href="../assets/img/pestaña.JPG"> 
            <link rel="stylesheet" href="../assets/css/estilos_registro.css"> 
        <link rel="stylesheet" href="../assets/css/estilos_registro.css"> 

        <title>Solmedi</title>
    </head>

    <body>
     
    <div>
      <?php
        include_once('../../Proyecto_Solmedi/php/header.php');
      ?>

      <?php
        include_once('../../Proyecto_Solmedi/php/desplegable.php');
      ?>

      <?php
        //include('../../Proyecto/php/registro_servicio.php');
      ?>
 
    </div>
        <div id="div1">

        <?php
        include '../../Proyecto_Solmedi/php/Database.php';
        //select * from servicio ORDER BY id_servicio DESC;
        $query="SELECT id_servicio from servicio where ident=(SELECT max(ident) from servicio);" ;
        $query2="SELECT doc_paciente from paciente where ident_pac=(SELECT max(ident_pac) from paciente);" ;
        $query3="SELECT nombre_usuario from usuario where nombre_usuario=(SELECT max(nombre_usuario) from usuario);" ;
        $id_s=mysqli_query($conn,$query);
        $id_pac=mysqli_query($conn,$query2);
        $id_usu=mysqli_query($conn,$query3);
        while($mostrar=mysqli_fetch_array($id_s)and$mostrar2=mysqli_fetch_array($id_pac)and$mostrar3=mysqli_fetch_array($id_usu)){
      ?>

            <form class="row g-3"  action="../../Proyecto_Solmedi/php/registro_datos.php"  method="POST">
                <div class="col-3">
                  <label for="inputAddress" class="form-label">Id HC </label>
                  <input type="number" name="idhc" class="form-control"  placeholder="(numero max. 10 unidades)">
                </div>
                
                <div class="col-md-3">
                  <label for="id" class="form-label">Documento del paciente</label>
                  <input type="number" class="form-control" name="docpa"  value ="<?php echo $mostrar2['doc_paciente']?>" readonly>
                </div>
                <div class="col-md-3">
                  <label for="Usuario" class="form-label">Nombre de enfermer@ que atiende</label>
                  <input type="text" class="form-control" name="nom_enfer"  value ="<?php echo $mostrar3['nombre_usuario']?>" readonly>
                </div>
                <div class="col-md-3">
                  <label for="inputAddress2" class="form-label">Id servicio</label>
                  <input type="number" class="form-control" name="Id_ser"  value ="<?php echo $mostrar['id_servicio']?>"  readonly>
                </div>
                <div class="col-6">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripción del servicio</label>
                    <input type="text" class="form-control" name="des_ser"  ></input>
                </div>
                <div class="col-6">
                    <label for="exampleFormControlTextarea1" class="form-label">Diagnostico</label>
                    <input type="text" class="form-control" name="diag"  ></input>
                </div> 
                <div class="col-6">
                    <label for="exampleFormControlTextarea1" class="form-label">Examen fisico inicial</label>
                    <input type="text" class="form-control" name="exa_fis"  ></input>
                </div> 
   
                <div class="col-md-2">
                </div>
    
                <div class="col-12">
              <input class="btn btn-outline-dark" type="submit" value="Finalizar">
                <!--<a class="btn btn-outline-dark" href="../../Proyecto/pages/registro_datos_Solmedi.html">Siguiente</a>-->
                <!--<button type="button" class="btn btn-outline-dark" href="../../Proyecto/pages/recuperar_Solmedi.html">Siguiente</button>-->
            </div>
              </form>
              <?php
              }
              ?>
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
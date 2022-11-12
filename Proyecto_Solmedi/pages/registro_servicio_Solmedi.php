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
    <?php
          include_once('../../Proyecto_Solmedi/php/header.php');
        ?>

        <?php
          include_once('../../Proyecto_Solmedi/php/desplegable.php');
        ?>


          </div>

        <div id="div1">
            <form class="row g-3"  action="../../Proyecto_Solmedi/php/registro_servicio.php" method="POST">
                <div class="col-md-2">
                  <label for="inputAddress" class="form-label">Id servicio</label>
                  <input type="number" class="form-control" id="inputAddress" placeholder="(numero max. 10 unidades)" name="idser" required>
                </div>
                <!--<div class="col-6">
                    <label for="exampleFormControlTextarea1" class="form-label">Tipo de servicio</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                </div> -->

                <div class="col-md-3">
                <label for="inputState" class="form-label" >Tipo de servicio</label>
                <select id="inputState" class="form-select" name="tiserv" required>
                  <option selected>seleccione el tipo de servicio</option>
                  <option >Medicina General</option>
                  <option >Odontologia General</option>
                  <option >Cardiologia</option>
                  <option >Medicina Interna</option>
                  <option >Fisioterapia</option>
                </select>
              </div>


                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Fecha de atencion</label>
                  <input type="date" class="form-control" id="inputCity" name="fechaten" required>
                </div>
                <div class="col-md-2">
                  <label for="inputCity" class="form-label">Hora de atencion</label>
                  <input type="time" class="form-control" id="inputCity" name="hoaten" required>
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
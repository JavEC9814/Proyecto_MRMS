<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadisticas - Solmedi</title>
    <link rel="shorcut icon" type="image/x-icon" href="../assets/img/pestaña.JPG"> 
    <link rel="stylesheet" href="../assets/css/estilos_registro.css"> 

    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.css"/>
    <link rel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css"/>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.1/Chart.min.js"></script>

    <link rel= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
  
    <style>
        body {
            text-align: center;
            color: green;
        }
        h2 {
            text-align: center;
            font-family: "Verdana", sans-serif;
            font-size: 40px;
        }
        .container {
            width: 70%;
            margin: 15px auto;
        }
    </style>

</head>


<body>
    <div>
        <?php
            include_once('../../Proyecto_Solmedi/php/header.php');
        ?>
    </div>
    

    <div class="col-xs-12 text-center">
        <h2>Citas Asignadas (semana)</h2>
    </div>
  
    <div id="donut-chart"></div>
        <script>
            var chart = bb.generate({
                data: {
                columns: [
                    ["Medicina General", 30],
                    ["Odontologia General", 20],
                    ["Cardiologia", 10],
                    ["Medicina Interna", 25],
                    ["Fisioterapia", 15],
                ],
                type: "donut",
                    onclick: function (d, i) {
                    console.log("onclick", d, i);
                },
                    onover: function (d, i) {
                    console.log("onclick", d, i);
                },
                    onout: function (d, i) {
                    console.log("onclick", d, i);
                },
                onout: function (d, i) {
                    console.log("onclick", d, i);
                },
                onout: function (d, i) {
                    console.log("onclick", d, i);
                },
            },
                donut: {
                title: "Total: 80",
            },
            bindto: "#donut-chart",
            });
        </script>

    <hr>

    <div class="container">
        <h2>Cantidad de pacientes atendidos (Semana)</h2>
        <div> 
            <canvas id="myChart1"  width= "50" height= "15" margin-right="10" ></canvas>
        </div>
    </div>

    <div>
    <script >
        var ctx = document.getElementById("myChart1").getContext("2d");
        var myChart = new Chart(ctx, {
                type: "bar",
                data: {
                    labels: [
                    "Lunes",
                    "Martes",
                    "Miercoles",
                    "Jueves",
                    "Viernes",
                    "Sabado",
                    "Domingo",
                ],
                datasets: [{
                label: "Medicina General",
                data: [5, 4, 4, 3, 2, 2, 3],
                backgroundColor: "rgba(0,0,255,0.6)",},
                {
                label: "Odontologia General",
                data: [3, 2, 3, 2, 3, 3, 2],
                backgroundColor: "rgba(255, 127, 0,0.6)",}, 
                {
                label: "Cardiologia",
                data: [4, 1,1 , 2, 1, 0, 1],
                backgroundColor: "rgba(0,204,0,0.6)",},
                {
                label: "Medicina Interna",
                data: [4, 2, 4, 2, 3, 2, 3],
                backgroundColor: "rgba(255,0,0,0.6)",},
                {
                label: "Fisioterapia",
                data: [3, 1, 2, 1, 2, 2, 1],
                backgroundColor: "rgba(127,0,255,0.6)",},
                
        ],
      },
    });
  </script>
  </div>

    <!--<div class="container">
        <h2>Cantidad de pacientes atendidos (Semana)</h2>
        <div> 
            <canvas id="myChart1" width= "50" height= "20" margin-right="30" ></canvas>
        </div>

        <div>
            <canvas id="myChart2" width= "50" height= "20" margin-right="30"></canvas>
        </div>

        <div>
            <canvas id="myChart3" width= "50" height= "20" margin-right="30"></canvas>
        </div>
        
    </div>

    <div>
    <script >
        var ctx = document.getElementById("myChart1").getContext("2d");
        var myChart = new Chart(ctx, {
                type: "horizontalBar",
                data: {
                    labels: [
                    "Lunes",
                    "Martes",
                    "Miercoles",
                    "Jueves",
                    "Viernes",
                    "Sabado",
                    "Domingo",
                ],
                datasets: [{
                label: "Medicina General",
                data: [5, 4, 4, 3, 2, 2, 3],
                backgroundColor: "rgba(0,0,255,0.6)",},
        ],
      },
    });


    var ctx = document.getElementById("myChart2").getContext("2d");
        var myChart = new Chart(ctx, {
                type: "radar",
                data: {
                    labels: [
                    "Lunes",
                    "Martes",
                    "Miercoles",
                    "Jueves",
                    "Viernes",
                    "Sabado",
                    "Domingo",
                ],
                datasets: [{
                label: "Odontologia General",
                data: [3, 2, 0, 2, 3, 4, 2],
                backgroundColor: "rgba(255, 127, 0,0.6)",}, 
        ],
      },
    });

    var ctx = document.getElementById("myChart3").getContext("2d");
        var myChart = new Chart(ctx, {
                type: "radar",
                data: {
                    labels: [
                    "Lunes",
                    "Martes",
                    "Miercoles",
                    "Jueves",
                    "Viernes",
                    "Sabado",
                    "Domingo",
                ],
                datasets: [{
                label: "Cardiologia",
                data: [2, 2, 3, 2, 3, 3, 2],
                backgroundColor: "rgba(0,204,0,0.6)",},
        ],
      },
    });
  </script>
  </div>

  <hr>

    <div class="container">
        <h2>Cantidad de pacientes atendidos (Semana)</h2>
        <div>
            <canvas id="myChartsa" width= "50" height= "20" float="left"></canvas>
        </div>
    </div>

    <div style="magin-top: 200px;">
    <script >
        var ctx = document.getElementById("myCharts").getContext("2d");
        var myChart = new Chart(ctx, {
                type: "radar",
                data: {
                    labels: [
                    "Lunes",
                    "Martes",
                    "Miercoles",
                    "Jueves",
                    "Viernes",
                    "Sabado",
                    "Domingo",
                ],
                datasets: [{
                label: "Medicina General",
                data: [5, 4, 4, 3, 2, 2, 3],
                backgroundColor: "rgba(0,0,255,0.6)",},
                {
                label: "Odontologia General",
                data: [3, 2, 0, 2, 3, 4, 2],
                backgroundColor: "rgba(255, 127, 0,0.6)",},
                {
                label: "Cardiologia",
                data: [2, 0, 2, 0, 4, 0, 0],
                backgroundColor: "rgba(0,204,0,0.6)",},
                {
                label: "Medicina Interna",
                data: [2, 2, 3, 7, 4, 3, 5],
                backgroundColor: "rgba(255,0,0,0.6)",},
                {
                label: "Fisioterapia",
                data: [2, 2, 3, 7, 4, 3, 5],
                backgroundColor: "rgba(127,0,255,0.6)",},
                
        ],
      },
    });
  </script>-->
  </div>

  

</body>
  


</html>







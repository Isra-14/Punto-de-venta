<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">                      
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body >
    <div class="container-fluid" >
        <?php include './header.php' ?>


        <div class="row" >
                <div class="col-2" style="height: 100vh; ">
                  <div class="sidenav">
                    <a href="recibosadministrador.html"><i class="fa fa-ticket"></i>Recibos</a>
                    <a href="reportesadministrador.html" style="background-color: #ff7e2f;"><i class="fa fa-line-chart"></i>Reportes</a>
                    <a href="inventarioadministrador.html"><i class="fa fa-archive"></i>Inventario</a>
                    <a href="configuracionadministrador.html"><i class="fa fa-cogs"></i>Configuración</a>
                    <a href="ayudaSoporteadministrador.html"><i class="fa fa-info-circle"></i>Ayuda y Soporte</a>
                  </div>
                </div>
                <div class="col" style="font-size: 20px;  margin-top: 10px;">
                  Resumen
                  <div class="row-1" style="margin-top: 10px;">
                    <label class="toggle">
                      <input type="checkbox">
                      <span class="slider"></span>
                    
                      <!-- label element 👇 -->
                      <span class="labels" data-on="Día" data-off="Mes"></span>
                    </label>
                    <input type="date" id="eligeFechareporte" name="eligeFechareporte" style="margin-left: 20px;float:right">
                    <button type="button" class="btn btn-outline-dark" style="float: right; margin-left: 5px;">Detalle de Ventas</button>
                    <button type="button" class="btn btn-outline-dark" style="float: right; margin-left: 5px;">Ventas por producto</button>
                    <button type="button" class="btn btn-outline-dark" style="float: right;">Ventas por categoría</button>
                  </div>
                  <div class="row-1" style="margin-top: 30px;"></div>



                  </div>
                </div>
        </div>
      </div>
  </body>
</html>
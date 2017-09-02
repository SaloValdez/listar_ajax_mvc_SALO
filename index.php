<?php
require_once "b_controlador/controller.php";
require_once "a_modelo/model.php";


 ?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="c_vista/css/styles.css">
  <script type="text/javascript" src="c_vista\js\jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="peticion.js">

  </script>
  <title>REPORTE MVC</title>
  <style media="screen">
    td{
          padding: 5px;
    }
  </style>
</head>
<body>
  <center>

    <h1>Reporte con FPDF por MVC con POO</h1>
    <h3>PHP MYSQL</h3>
    <BR></BR>
    <BR></BR>
    <div class="campo" style="background-color:blue;">
              <form class="" action="index.html" method="post">
                nombre<input type="text" name="" value=""><br><br>
                apellido <input type="text" name="" value=""><br>
                <h1>ESTE ES EL CAMPO A OCULTAR</h1>
              </form>
      </div>

      <div class="lula" style="background-color:yellow;">
                <form class="" action="index.html" method="post">
                  nombre<input type="text" name="" value=""><br><br>
                  apellido <input type="text" name="" value=""><br>
                  <h1>ESTE ES EL CAMPO A OCULTAR</h1>
                </form>
        </div>



        <input type="text" id="dsdsd" name="" value="">
          <input type="text" id="amatsdserno" name="" value="">


          <input type="button"  onclick="enviar_datos_ajax();"  value="LISTAR">
          <a href="#" onclick="enviar_datos_ajax();">listar</a>
      <section  id="contenido">

      </section>





</body>
</html>

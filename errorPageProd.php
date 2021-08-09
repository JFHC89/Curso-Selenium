<!DOCTYPE html>
<html>

<head>
     <meta http-equiv="content-type" content="text/html" />
     <meta charset="utf-8" />
     <title>Sistema WebCel</title>
     <link rel="stylesheet" href="EstilosWEBCELL.css" />
     <script type="text/javascript" src="FuncionesProductos.js"></script>
</head>

<body id="movil">

<!-- SECCION CABECERA-->
   <h1>Productos</h1>

<!--SECCION MENU-->

 <div id="menu">
 <a href="index.html">INICIO</a>
 <a href="FormProductosING.php">PRODUCTOS</a>
 <a href="FormularioCatING.php">CATEGORIAS</a>
 <a href="FormProductosVER.php">CONSULTAS</a>
 </div>

<!--SECCION CONTENIDO-->
<div id="contenido">
  <fieldset id="error">
  <legend>ERROR!!</legend>
  <?php
      $mensaje = $_GET["MSG"];
      echo "<p class='errorMSG'>$mensaje</p>\n";
  ?>
  </fieldset>
</div>
</body>
</html>

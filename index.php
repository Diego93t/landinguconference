<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Landing</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>	
<body>


<?php 

  $host ="localhost";

  $puerto = "3306";

  $usuario = "root";

  $contrasena = "";

  $basededatos = "landin_confe";

  $tabla = "registro";

  function Conectarse()
  {
    global $host, $puerto, $usuario, $contrasena, $basededatos, $tabla;
    if (!($link =mysqli_connect($host.":".$puerto, $usuario, $contrasena))) {
      echo "Error conectando la BD";
      exit();
    }
    else{
      echo "Listo, conectado";
    }
    if (!mysqli_select_db($link, $basededatos)) {
      echo "ERROR seleccionando la bd";
      exit();
    }
    else{
      echo "se obtuvo la conexion a la bd $basededatos";
    }
    return $link;
  }


 ?>
 

    <header> 
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">UPGRADE</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Contact</a>
          </nav>
        </div>
     </header>

    <p><h3>Hagamos que tu negocio</h3> 
    <h1>SUBA DE NIVEL</h1>
    <h3>registrate y coonoce las herramientas basicas para conseguir mas clientes</h3>
    </p>
    <a href="Registro.php" class="btn btn-lg btn-secondary" >Me quiero registrar </a>
    <a href="#" class="btn btn-lg btn-secondary">Necesito mas informacion...</a>
      </main>

<footer>
</footer>
  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    

</body>	
</body>
</html>
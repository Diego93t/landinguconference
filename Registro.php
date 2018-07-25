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
      #echo "Error conectando la BD.<br>";
      exit();
    }
    else{
      #echo "Listo, conectado.<br>";
    }
    if (!mysqli_select_db($link, $basededatos)) {
      #echo "ERROR seleccionando la bd.<br>";
      exit();
    }
    else{
      #echo "obtuvo la conexion a la bd $basededatos.<br>";
    }
    return $link;
  }

$link = Conectarse();

if($_POST){
  $queryInsert = "INSERT INTO $tabla (Nombre, Correo, Nom_Emp) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['nom_em']."')";

  $resultInsert = mysqli_query($link, $queryInsert);

  if($resultInsert){
    #echo "Datos insertados correctamente";
  }
  else
  {
    #echo "no se ingresaron los datos";
  }
}

 ?>
 



	<header></header>
	<content>
		<div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">UPGRADE</h2>
            <h3 class="section-subheading text-muted">Registro</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <form class="form-horizontal" method="post">
                	<!--Nombre-->
                  <div class="form-group">
                    <span class="input-group" id="basic-addon1"><strong>*&nbspNOMBRE:</strong></span>
                    <input class="form-control" aria-describedby="basic-addon1" name="name" type="text" placeholder="Ingresar nombre completo" required autofocus>
                    <p class="help-block text-danger"></p>
                  </div>
                  <!-- Correo-->
                  <div class="form-group">
                    <span class="input-group" id="basic-addon1"><strong>*&nbspCORREO:</strong></span>
                    <input class="form-control" aria-describedby="basic-addon1" name="email" type="email" placeholder="Ingresar correo" required autofocus>
                    <p class="help-block text-danger"></p>
                  </div>
                  <!--Empresa-->
                  <div class="form-group">
                    <span class="input-group" id="basic-addon1"><strong>NOMBRE DE LA EMPRESA O INDIVIDUAL:</strong></span>
                    <input class="form-control" aria-describedby="basic-addon1" name="nom_em" type="text" placeholder="Ingresar nombre de la empresa o n/a" autofocus>
                    <p class="help-block text-danger"></p>
                  </div>
                  <p>Un campo con * es un campo obligatorio</p>
                  <!-- Boton-->
                  <div class="clearfix"></div>
                  <div class="col-lg-6 text-center">
                    <button class="btn btn-primary btn-xl text-uppercase" type="submit" onclick="Confirmareg()"> Registrarme</button>
                  </div>
                </form>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>
      </div>
	</content>
	<footer></footer>
    <!-- Bootstrap core JavaScript      onclick="Confirmareg()">
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script type="text/javascript">
      function Confirmareg(){
        window.open("Invitar.php");
      }
    </script>
    

</body>	
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Upgrade</title>
    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="vendor/css/bootstrap.min.css">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendor/cubeportfolio/css/cubeportfolio.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='http:////netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/stylemenu.css">
</head>
    <body>
    <?php 
        $host ="localhost";        
        $puerto = "3306";        
        $usuario = "root";        
        $contrasena = "";        
        $basededatos = "landin_confe";
        $tabla = "contacto";
        
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
        $queryInsert = "INSERT INTO $tabla (Nombre, Correo, Mensaje) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['mensaje']."')";
        
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
   <header>
  <div class="heder-u2">
            <div class="mainPage navbar-static-top marg-ext">
                <img src="img/LogoVerde_06.png" class="img-menu text-center" width="20%">
                <a href="#" class="menu-btn " onclick="toggleMenu();"><i class="icon-reorder"></i></a>
                <nav id="mainNav" class="closed" role='navigation'>
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="Registro.php">Registro</a></li>
                        <li><a href="Info.php">Informacion</a></li>
                        <li><a href="Contacto.php">Contactos</a></li>
                    </ul>
                    <a id="close" onclick="toggleMenu();">x</a>
                </nav>
            </div>
</div>

</header>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>CONTACTO</h3><br>
                </div>
            </div>
        </div>
 
    <div class="container">
        <section class="main row">
            <form class="form-horizontal" method="post">
                <!--Nombre-->
                <div class="col-md-12 ">
                    <div class="form-group">
                        <span class="input-group" id="basic-addon1" for="nombre">Nombre&nbsp;*</span>
                        <input class="form-control" aria-describedby="basic-addon1" name="name" type="text" required autofocus>
                    </div>
                </div>
                <!-- Correo-->
                <div class="col-md-12 ">
                    <div class="form-group">
                        <span class="input-group" id="basic-addon1"  for="email">Email&nbsp;*</span>
                        <input class="form-control" aria-describedby="basic-addon1" name="email" type="email" required autofocus>
                    </div>
                </div>
                <!--Empresa-->
                <div class="col-md-12 ">
                    <div class="form-group">
                        <span class="input-group" id="basic-addon1">Comentario&nbsp;*</span>
                        <input type="text" class="form-control" aria-describedby="basic-addon1" name="mensaje" maxlength="200" required autofocus>
                    </div>
                </div>
                <p>Un campo con * es un campo obligatorio</p>
                <br>
            <!-- Boton-->
            <div class="col-md-12 text-center ">
                <button class="btn btn-primary btn-md text-uppercase active" type="submit" onclick="Confirmaenv()" >Enviar</button>  
            </div>
            </form>
            <br>
            <div class="col-lg-12 text-center">
                <p>Al dar click en el boton, estas aceptando el uso de tu informacion para motivos de publicacion de la marca Upgrade </p>
            </div>
            <br>
        </section>
    </div>
    <footer></footer>
    <!-- Bootstrap core JavaScript      onclick="Confirmareg()">
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
   
     <script  src="js/indexmenu.js"></script>

    <script type="text/javascript">
        function Confirmaenv(){
          alert("Mensaje enviado.");
          
        }
    </script>

</body>
</html>
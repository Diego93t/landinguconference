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
    <body >
        <!--**************************************************************************************-->
        <!--TU CODIGO VA AQUI-->
        <!--Aqui comienza el codigo para el menu-->
        <header>
            <div class="heder-u2">
                <div class="mainPage navbar-static-top marg-ext">
                    <img src="img/LogoVerde_06.png" class="img-menu" width="20%">
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
        <!--PHP para el registro-->
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
            #echo "<div><p class='color-fntr text-center text-uppercase'>Datos insertados correctamente.</p></div>";
            }
            else
            {
            #echo "no se ingresaron los datos";
            }
            }
            ?>
        <!--Empiesa el contenido-->
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="color-fntw">REGISTRO</h3><br>
                </div>
            </div>
        </div>
        <div class="container">
            <section class="main row">
                <!-- <div class="col-md-12"> -->
                <form class="form-horizontal" method="post">
                    <!--Nombre-->
                    <div class="col-md-12 ">
                        <div class="form-group">
                            <span class="input-group color-fntw" id="basic-addon1">Tu nombre&nbsp;*</span>
                            <input class="form-control" aria-describedby="basic-addon1" name="name" type="text"  required autofocus>
                        </div>
                    </div>
                    <!-- Correo-->
                    <div class="col-md-12">
                        <div class="form-group">
                            <span class="input-group color-fntw" id="basic-addon1">Tu correo&nbsp;*</span>
                            <input class="form-control" aria-describedby="basic-addon1" name="email" type="email" required autofocus>
                        </div>
                    </div>
                    <!--Empresa-->
                    <div class="col-md-12">
                        <div class="form-group">
                            <span class="input-group color-fntw" id="basic-addon1">Nombre de tu empresa</span>
                            <!--placeholder="Ingresar nombre de la empresa o n/a" -->
                            <input class="form-control" aria-describedby="basic-addon1" name="nom_em" type="text" autofocus>
                        </div>
                    </div>
                    <p class="text-center">Un campo con * es un campo obligatorio.</p>
                
                    <br>
                   
                    <div class="col-md-12 text-center ">
                        <button class="btn btn-primary btn-md text-uppercase active" type="submit">Registrarme.</button>
                    </div>
                </form>
                 <div class="col-md-12 text-center ">
                                    <a href="Invitar.php" class="btn bt-border color-fntw">Invitar a un amigo.</a>
                                </div>
                <br>
                
                <div class="col-md-12 text-center">
                    <p >Al dar click en el boton, estas aceptando el uso de tu informaci&oacute;n para motivos de publicaci&oacute;n de la marca Upgrade. </p>
                </div>
                <br>
            </section>
        </div>
        <footer></footer>
        <!-- Bootstrap core JavaScript      onclick="Confirmareg()">
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!--Este js es para la animacion modal-->
        <script  src="js/indexmenu.js"></script>
        <script type="text/javascript">
            function Enlace(){
              window.open("Invitar.php");
            }
        </script>
        <script type="text/javascript">
            function Confirmareg(){
              alert("Registro exitoso");
            }
        </script>
    </body>
</html>
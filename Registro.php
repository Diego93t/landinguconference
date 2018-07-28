<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Upgrade</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/css/bootstrap.min.css" rel="stylesheet">
    <!-- Css Estilos local -->
    <link rel="stylesheet" type="text/css" href="css/style.css"  >
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=0.80, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>

    <!-----Menu--------------------------------------------->
<nav id="mainNav" class="navbar navbar-default  ">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <img src="img/bars.png" width="50px"> 
                </button>
               <!-- <img src="img/LogoVerde_06.png" width="100">-->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <!--link normal-->
                    <li><a class="page-scroll" href="Index.php">Inicio</a></li>
                    <li><a class="page-scroll" href="Registro.php">Registro</a></li>
                    <li><a class="page-scroll" href="Info.php">Informacion</a></li>
                    <li><a class="page-scroll" href="Contacto.php">Contactos</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


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
        #echo "Datos insertados correctamente";
        }
        else
        {
        #echo "no se ingresaron los datos";
        }
        }
        ?>
    <!--Empiesa el contenido-->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="img/LogoVerde_06.png" width="100">
                    <h3>REGISTRO</h3>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <section class="main row">
            <!-- <div class="col-md-12"> -->
            <form class="form-horizontal" method="post">
                <!--Nombre-->
                <div class="col-md-12 ">
                    <div class="form-group">
                        <span class="input-group" id="basic-addon1">Tu nombre&nbsp;*</span>
                        <input class="form-control" aria-describedby="basic-addon1" name="name" type="text"  required autofocus>
                    </div>
                </div>
                <!-- Correo-->
                <div class="col-md-12">
                    <div class="form-group">
                        <span class="input-group" id="basic-addon1">Tu correo&nbsp;*</span>
                        <input class="form-control" aria-describedby="basic-addon1" name="email" type="email" required autofocus>
                    </div>
                </div>
                <!--Empresa-->
                <div class="col-md-12">
                    <div class="form-group">
                        <span class="input-group" id="basic-addon1">Nombre de tu empresa</span>
                        <!--placeholder="Ingresar nombre de la empresa o n/a" -->
                        <input class="form-control" aria-describedby="basic-addon1" name="nom_em" type="text" autofocus>
                    </div>
                </div>
                <h6>Un campo con * es un campo obligatorio</h6>
                <br>
            </form>
            <!-------------- Boton-->
            <div class="col-md-12 text-center ">
                <button class="btn btn-primary btn-md text-uppercase active" type="submit" >Registrarme</button>
                </div>
            <div class="col-md-12 text-center ">
                <button class="btn btn-primary btn-md text-uppercase active" href="Invitar.php" onclick="Confirmareg()">Invitar Amigo</button>
            </div>
            
            <br>
            <div class="col-md3"> _</div>
            <div class="col-md-9 text-center">
                <p>Al dar click en el boton, estas aceptando el uso de tu informacion para motivos de publicacion de la marca Upgrade </p>
            </div>
        </section>
    </div>
    <footer></footer>
    <!-- Bootstrap core JavaScript      onclick="Confirmareg()">
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
    <script type="text/javascript">
        function Confirmareg(){
          window.open("Invitar.php");
        }
    </script>
</body>
</html>
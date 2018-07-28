<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Landing</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/css/bootstrap.min.css" rel="stylesheet">
    <!-- Css Estilos local -->
    <link rel="stylesheet" type="text/css" href="css/style.css"  >
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=0.80, maximum-scale=1.0, minimum-scale=1.0">
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
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="img/LogoVerde_06.png" width="100">
                    <h3>CONTACTO</h3>
                </div>
            </div>
        </div>
    </header>
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
                <h6>Un campo con * es un campo obligatorio</h6>
                <br>
            </form>
            <!-- Boton-->
            <div class="col-md-12 text-center ">
                <button class="btn btn-primary btn-md text-uppercase active" type="submit">Enviar</button>  
            </div>
            <br>
            <div class="col-lg-12 text-center">
                <p>Al dar click en el boton, estas aceptando el uso de tu informacion para motivos de publicacion de la marca Upgrade </p>
            </div>
        </section>
    </div>
    <footer></footer>
    <!-- Bootstrap core JavaScript      onclick="Confirmareg()">
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function Confirmareg(){
          window.open("Invitar.php");
        }
    </script>
</body>
</html>
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
            <div class="heder-u">
                <div class="mainPage navbar-static-top marg-ext">
                    <img src="img/LogoVerde_06.png" class="img-menu" width="30%">
                    <a href="#" class="menu-btn " onclick="toggleMenu();"><i class="icon-reorder"></i></a>
                    <nav id="mainNav" class="closed" role='navigation'>
                        <ul>
                            <li><a href="Registro.php">Registro</a></li>
                            <li><a href="Info.php">Informacion</a></li>
                            <li><a href="Contacto.php">Contactos</a></li>
                        </ul>
                        <a id="close" onclick="toggleMenu();">x</a>
                    </nav>
                </div>
                <div class="container ">
                    <div class="header-content">
                        <div class="header-content-inner">
                            <section class="main row">
                                <!-- <div class="col-md-12"> -->
                                <div class="col-md-12 ">
                                    <h2 class="color-fntw">Hag&aacute;mos que tu negocio</h2>
                                    <h1 class="color-fntw">SUBA DE NIVEL</h1>
                                    <br>
                                    <h3 class="color-fntw">Registrate y coonoce las herramientas basicas para conseguir mas clientes</h3>
                                </div>
                                <br>
                                <!--------------Contador---------------------------------->     
                                <div class="col-md-12 text-center">
                                    <?php
                                        require 'conexioncon.php';
                                        $sql = "SELECT (51 - (SELECT COUNT(Id_reg) from registro)) as Lugares from registro";
                                        $result = $mysqli->query($sql);
                                        $row = $result->fetch_assoc();
                                        ?>
                                    <a class="btn btn-primary btn-md text-uppercase active" value="Registrarme" <?php if($row['Lugares']<=0){echo "href='Aviso.php'";}else{echo "href='Registro.php'";} ?>>¡Me quiero registrar!</a>
                                    <!-------------Termina contador---------------------------->
                                </div>
                                <div class="col-md-12 text-center ">
                                    <a href="Info.php" class="btn bt-border color-fntw">Necesito mas info...</a>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <br>
        <div class="container marg-ext" >
            <section class="row">
                <div class="col-md-12">
                    <img src="img/LogoVerde_06.png" width="30%" >
                    <h2 class="color-fntb text-center">CONFERENCE</h2>
                    <br>
                    <h2 class="color-fntw text-center">Ciudad Hidalgo</h2>
                </div>
                <br>
                <div class="col-sm-12 color-fntb">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="img/017-users-1.png" width="30%" >
                </div>
                <div class="col-md-12 text-center">
                    <a href="invitar.php" class="btn btn-primary btn-md">Invitar a un amigo</a>
                </div>
            </section>
        </div>
        <section  class="bg-primary">
            <div class="container marg-ext">
            <div class="row">
                <div class="col--12 text-center">
                    <h2 class="section-heading text-uppercase text-center color-fntb">Contenido del curso</h2>
                    <br>
                </div>
                <br>
                <div class="col-sm-12 marg-ext">
                    <img src="img/065-smartphone.png" width="25%" align="left" >
                    <h4 class="text-left">Consigue clientes usando internet</h4>
                </div>
                <p class="color-fntb">Sabado 11 de Agosto </p>
                <br>
                <br>
                <div class="col-sm-12 marg-ext">
                    <img src="img/106-list.png" width="30%"  align="right" >
                    <h4 class="text-right">Mejora procesos para incrementar ventas </h4>
                </div>
                <p class="text-right color-fntb">Sabado 18 de Agosto </p>
                <br>
                <br>
                <div class="col-sm-12   marg-ext">
                    <img src="img/017-users-1.png" width="30%"  align="left" >
                    <h4 class="text-left">La importancia de capacitar a tu personal</h4>
                </div>
                <p class="color-fntb">Sabado 25 de Agosto </p>
                <br>
                <br>
            </div>
        </section>
        <!-------------MAPS------------------------->
        <section class="row ">
            <div class="col-md-12">
                <br>
                <br>
                <h2 class="text-center color-fntb">¿Como llegar?</h2>
                <br>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.630035826423!2d-100.5613048403044!3d19.68578313194013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2cbb2c53a0d0b%3A0xa21704aa7c871d96!2sUniversidad+Vasco+de+Quiroga!5e0!3m2!1ses-419!2smx!4v1532558797695" width="97%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div class="col-md-12 text-center">
                <a class="btn btn-primary btn-md text-center" href="https://www.google.com/maps/place/Universidad+Vasco+de+Quiroga/@19.6854178,-100.5634421,17z/data=!4m5!3m4!1s0x0:0xa21704aa7c871d96!8m2!3d19.6851168!4d-100.5615869?hl=es-ES"> Obtener ruta</a>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <p>SIGUENOS</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <a class="text-left"href="https://www.facebook.com/UpgradeConsultoradeInnovacion"><img src="img/instagram.png" width="20%"></a>
                        <a class="text-right" href="https://www.facebook.com/UpgradeConsultoradeInnovacion"><img src="img/facebook.png" width="20%"></a>  
                        <h2>UPGRADE</h2>
                        <h3>Consultora de inovaccion</h3>
                    </div>
                </div>
            </div>
            <br><br>
        </footer>
        <!-- Bootstrap core JavaScript
            ================================================== -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!--iniciar Cuberportfolio-->
        <script type="text/javascript" src="js/main.js" ></script>
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
        <!--Este js es para la animacion modal-->
        <script  src="js/indexmenu.js"></script>
    </body>
</html>
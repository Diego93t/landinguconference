<!DOCTYPE html>
<html lang="es">
<head>
  <title>Info</title>

  <!--Iniciar carga de bootstrap css-->
    <meta charset="utf-8"><!--Esto para poner acentos a las palabras-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

    <!--Estas lineas de codigo son para el menu-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='http:////netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/stylemenu.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
  
<!--**************************************************************************************-->
<!--TU CODIGO VA AQUI-->
  
<!--Aqui comienza el codigo para el menu-->

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


<!--Comenzamos con la primer ventana de la maquina que elige el usuario-->
<div class="container">
  <div class="row">
    <div class="col-md-12">
       <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                             <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                  <h4 class="panel-title">
                                    <a id="Preg" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      <i class="glyphicon glyphicon-chevron-down"></i>
                                       ¿Qué es U. Conference?
                                    </a>
                                  </h4>
                                </div><!--fin del headingOne-->
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                  <div class="panel-body">
                                    <p id="ContPre">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                  </div><!--Final del panel-body-->
                                </div><!--final de collapseONE-->
                              </div><!--fin panel panel-default-->
                              <!--iniciamos el segundo panel panel-default-->
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                  <h4 class="panel-title">
                                    <a id="Preg" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                     <i class="glyphicon glyphicon-chevron-down"></i>
                                      ¿Dónde sera el evento?
                                    </a>
                                  </h4>
                                </div><!--fin del headingTwo-->
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                  <div class="panel-body">
                                    <p id="ContPre">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                  </div><!--Final del panel-body-->
                                </div><!--fin de collapseTwo-->
                              </div><!--fin panel panel-default-->
                              <!--iniciamos el tercer panel panel-default-->
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                  <h4 class="panel-title">
                                    <a id="Preg" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      <i class="glyphicon glyphicon-chevron-down"></i>
                                        ¿Qué voy a aprender?
                                    </a>
                                  </h4>
                                </div><!--fin del headingThree-->
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                  <div class="panel-body">
                                    <p id="ContPre">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                  </div><!--final del panel-body3-->
                                </div><!--fin del collapseThree-->
                              </div><!--fin del panel-default3-->
                              <!--iniciamos el cuarto panel panel-default-->
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                  <h4 class="panel-title">
                                    <a id="Preg" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                     <i class="glyphicon glyphicon-chevron-down"></i>
                                      ¿Tiene algún costo?
                                    </a>
                                  </h4>
                                </div><!--fin del headingTwo-->
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                  <div class="panel-body">
                                    <p id="ContPre">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    </p>
                                  </div><!--Final del panel-body-->
                                </div><!--fin de collapseTwo-->
                              </div><!--fin panel panel-default-->
                            </div><!--fin panel group-->
                        </div><!--fin del col-md-12-->
                      </div><!--fin del bs-callout bs-callout-danger-->
                    </div><!--fin de col-md-10-->
                  </div><!--fin de class=""-->
                </div><!--Fin de tabbable tabs-bottom-->
              </div><!--Fin de col-xs-12-->
<!--Boton------->
                            <div class="col-md-12 text-center">
                                <a href="Contacto.php" class="btn btn-primary btn-md ">Tengo otra duda.</a>
                            </div>

<!--**************************************************************************************-->
<!--jQuery-->
    <script type="text/javascript" src="vendor/Jquery/Jquery.min.js" ></script>
     
     <!--iniciar carga de bootstrap js-->
    <script type="text/javascript" src="vendor/Bootstrap/js/bootstrap.min.js" ></script>

    <!--iniciar Cuberportfolio-->
    <script type="text/javascript" src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js" ></script>
    <!--Este js es para la animacion modal-->
    <script  src="js/indexmenu.js"></script>

    <style>
      
      /* Estilos a los temas de los departamentos*/
      #Preg{
        font-size: 20px;
        font-family:'Arial';
        text-decoration: none;
      }

      #ContPre{
        text-align: center;
        text-decoration: none;
        font-size: 14px;
        font-family: 'Cambria';
        color: black;
        /*margin-top: -8px;
        margin-left: -8px;*/
      } 

    </style>
</body>
</html>    




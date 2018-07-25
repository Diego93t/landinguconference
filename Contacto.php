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



	<header></header>
	<content>
		<div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">UPGRADE</h2>
            <h3 class="section-subheading text-muted">contacto</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <form class="form-horizontal" name="form1" method="post" action="mailto:alberto.pc93@hotmail.com">
                	<!--Nombre-->
                  <div class="form-group">
                    <label class="input-group" id="basic-addon1" for="nombre"><strong>*Nombre:</strong></label>
                    <input class="form-control" aria-describedby="basic-addon1" name="nombre" id="nombre" type="text" placeholder="Ingresar nombre completo" required autofocus>
                  </div>
                  <!-- Correo-->
                  <div class="form-group">
                    <label class="input-group" id="basic-addon1" for="email"><strong>*Email:</strong></label>
                    <input class="form-control" aria-describedby="basic-addon1" name="nombre" id="mail" type="email" placeholder="Ingresar correo" required autofocus>
                  </div>
                  <!--Empresa-->
                  <div class="form-group">
                    <span class="input-group" id="basic-addon1"><strong>&iquest;Qu&eacute; te pareci&oacute; la p&aacute;gina?</strong></span>
                    <textarea class="form-control" aria-describedby="basic-addon1" name="opinion" id="opinion" type="text" placeholder="Ingresar nombre de la empresa o n/a" autofocus></textarea>
                  </div>
                  <!-- Boton-->
                  <div class="clearfix"></div>
                  <div class="col-lg-6 text-center">
                    <input class="btn btn-primary btn-xl text-uppercase" type="submit" value="Enviar">
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
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


	<h1>Listo</h1>
	<h4>Registro completado</h4>
    <a href='whatsapp://send?text=Hola te invitamos a incribirte a la conferencia www.google' data-action="share/whatsapp/share"> 
        enviar wa<img src="">
    </a><br>
    <a href="messenger://send?text=https://www.google.com" data-action="share/messenger/share"> 
        enviar fa<img src="">
    </a>
<br>
    <a href="https://m.me/Upgrade">Envíanos un mensaje de Facebook</a>
<br>

      <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your share button code -->
  <div class="fb-share-button" data-href="google.com" data-layout="button_count">
  </div>

	<footer></footer>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    

</body>	
</body>
</html>
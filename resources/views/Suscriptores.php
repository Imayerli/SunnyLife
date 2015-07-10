<html>
<head>
	<title>Sunny Life</title>
	<meta charset="utf-8">
	<!--Fuentes de google-->
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,700,400' rel='stylesheet' type='text/css'>
	<!--Hojas de Estilo-->
	<link rel="stylesheet" type="text/css" href="css/Style.css">
	<link rel="stylesheet" type="text/css" href="css/Menu.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<header>
<section>
<nav>
  <ul>
  	<li><a href=""><span class="Primero"><i class="icon icon-home"></i></span>Inicio</a></li>
    <li><a href=""><span class="segundo"><i class="icon icon-film"></i></span>K-Dramas</a>
      <ul>
      	<li><a href="">Dramas</a></li>
      	<li><a href="">Peliculas</a></li>
      	<li><a href="">Actores</a></li>
      	<li><a href="">Teasers</a></li>
      </ul>
    </li>
    <li><a href=""><span class="tercero"><i class="icon icon-music"></i></span>K-Pop</a>
       <ul>
      	<li><a href="">Musica</a></li>
      	<li><a href="">Cantantes</a></li>
      	<li><a href="">Grupos</a></li>
      </ul>
    </li>
    <li><a href=""><span class="cuarto"><i class="icon icon-images"></i></span>Galeria</a></li>
    <li><a href=""><span class="quinto"><i class="icon icon-lock"></i></span>Login</a></li>
  </ul>
</nav>
</header>
<section class= "Principal">
	<form name="Formulario" action ="" method= "post" class = "formulario">
         <ul>
            <li> <label for="Registro">Registro</label>
            <li> <label for="Identificacion">Identificacion:</label>
            <input type="text" name= "Identificacion" placeholder="Identificacion" required autopocus Id = "Identificacion" title="Identificacion"></li>
            <li> <label for="Nombre">Nombres:</label>
            <input type="text" name= "Nombre" placeholder="Nombre Completo" required autopocus pattein= "[a-zA-Z\s] {6,}" Id = "Nombre" title="Nombre"></li>
            <li> <label for="Apellido">Apellido:</label>
            <input type="text" name= "Apellido" placeholder="Apellido completo" required autopocus Id = "Apellido" title="Apellido"></li>
          	<li> <label for="Fecha_N">Fecha de Nacimiento:</label>
          	<input type="date" name= "Fecha_N" required autopocus Id= "Fecha_N" titli="Fecha_N"></li>
            <li> <label for="email">E_Mail:</label>
            <input type="email" name= "email"placeholder="Email" required autopocus Id = "email" title="email"></li>
            <li> <label for="contrasena">Contraseña:</label>
            <input type="text" name= "contrasena" placeholder="contraseña" required autopocus Id = "contrasena" title="contrasena"></li>
            <li><button type="submit" class="submit"> Enviar </button></li>
         </ul>
 </form>
</section>
<section class="rutas">
	<aside class="sp">
        <p><a href="Suscriptores.php"><span class=""><i class="icon icon-pencil2"></i></span>Regirtrate</a></p><br>
        <h5>Visitanos</h5>
        <p><a href="https://www.facebook.com/NovelasCoreanasId?ref=hl"><span class=""><i class="icon icon-facebook2"></i></span>Facebook</a></p>
        <p><a href=""><span class=""><i class="icon icon-twitter"></i></span>Twitter</a></p>
        <p><a href=""><span class=""><i class="icon icon-google-plus2"></i></span>Google Plus</a></p>
        <p><a href=""><span class=""><i class="icon icon-users"></i></span>Chats</a></p>
	</aside>
</section>
<footer>
<section class="pie">

</section>
</footer>
</body>
</html>			 
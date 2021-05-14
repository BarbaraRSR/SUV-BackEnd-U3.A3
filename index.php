<?php session_start(); /* Inicia sesión */
 if(!isset($_SESSION['UserData']['Username'])){
 header("location:login.php");
 exit;
 }
 ?>

<?php // Sesion para guardar datos de nuevo usuario.
  $_SESSION['Nombre'] = isset($_POST['Nombre'])? $_POST['Nombre'] : null;
  $_SESSION['Mail'] = isset($_POST['Mail'])? $_POST['Mail'] : null;
  $_SESSION['Fecha'] = isset($_POST['Fecha'])? $_POST['Fecha'] : '';
  $_SESSION['Semana'] = isset($_POST['Semana'])? $_POST['Semana'] : '';
  $Nombre = $_SESSION['Nombre'];
  $Mail = $_SESSION['Mail'];
  $Fecha = $_SESSION['Fecha'];
  $Semana = $_SESSION['Semana'];
 ?>

<?php // Cookies
  if(isset($_COOKIE['contador']))
  { 
    // Caduca en un año 
    setcookie('contador', $_COOKIE['contador'] + 1, time() + 60*15 ); // Duración de 5 minutos.
    $cuenta = 'Número de visitas: ' . $_COOKIE['contador']; 
  } 
  else 
  { 
    // Caduca en un año 
    setcookie('contador', 1, time() + (60*15)); 
    $cuenta = 'Esta es tu primera visita a la página.'; 
  } 
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<HTML>
<HEAD>
    <meta charset="utf-8">
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;600&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <title>SUV: Back-End</title>
</HEAD>

<BODY>
 <DIV class="cont">
  <DIV class="APP">
   <h1>Lenguajes de programación Back End</h1>

   
   <!-- MENÚ DE NAVEGACIÓN -->
   <DIV class="menu">
    <ul>
     <li><a href="index.php">Inicio</a></li>
     <li><a href="datos.php">Ver usuarios</a></li>
     <li><a href="upload.php">Subir archivo</a></li>
     <li><a href="gallery.php">Galería</a></li>
     <li><a href="logout.php">Salir</a></li>
    </ul>
  </DIV>

 <DIV class="actividad">
  <?php
   echo "<p>Hola, $Nombre</p>";
  ?>

  <p><?php echo $cuenta; ?> </p>
  
  <p>Imagen creada en PHP:<br>
  <img src="imagen.php"></p>
  
  <p>Documentos creados en PHP</p>
	<ul>
		<li>Documento <a href="filepdf.php">PDF</a></li>
		<li>Documento de <a href="filexcel.php">EXCEL</a></li>
		<li>Documento de <a href="fileword.php">WORD</a></li>
	</ul>
  <p><img src="https://cgestiona.com/files/1/page-contents/ingresar%20informaci%C3%B3n%20a%20T-Registro.jpg" alt="candado"></p>
  <!-- Verificar la existencia de cookies -->
  <?php
   if(count($_COOKIE) > 0) {
   echo "Las cookies están activadas.";
   } else {
   echo "No se encontraron cookies.";
   }
  ?>

  <p>Te encuentras en una página protegida.</p>
  <br>
  
 <!-- Termina div "actividad" -->
 </DIV>

 <p><b>Alumno: </b>Bárbara R. Solórzano R.<br/>
 <b>Código: </b>394485606<br/>
 <b>Asesor: </b>José Francisco Jafet Pérez López<br/>
 <b>Última modificación: </b>27 de abril 2021</p>

 <!-- Termina div "APP" -->
 </DIV>

<!-- Termina div "cont" -->
</DIV>

</BODY>
</HTML>
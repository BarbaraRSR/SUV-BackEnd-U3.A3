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
    <p>Aplicación para administración de imágenes en línea.</p>
    </p>

    <DIV class="actividad">
           
            <!-- FORMULARIO -->
            <form action="" method="post" name="Login_Form">
                
                <h4>Ingresa tus datos para iniciar sesión</h4>
                
                <p>Usuario:<br>
                    <input name="Username" type="email" placeholder="Ingresa tu correo electrónico" class="form"></p>
                <p>Contraseña:<br>
                    <input name="Password" type="password" class="form" placeholder="Ingresa tu contraseña (pst... es abc123)"></p>
                <input name="Submit" type="submit" value="Login" class="button">
            </form>
            

            <!-- VALIDACIÓN -->
            <?php session_start(); /* Para iniciar la sesión */
                if(isset($_POST['Submit'])){ /* Verificar que se ingresaron los datos */
            /* Array con la asociación user - correo */$logins = array('jfjafet@gmail.com' => 'abc123','user@mail.com' => '123456');
            
            /* Asigna usuario y contraseña a una variable */$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
            $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
            
            /* Validar la existencia de datos */if (isset($logins[$Username]) && $logins[$Username] == $Password){
            /* Acceso concedido  */$_SESSION['UserData']['Username']=$logins[$Username];
            header("location:index.php");
            exit;
            } else {
            /* Mensaje de error */$msg="<span style='color:red'>Error: Por favor, verifique sus datos.</span>";
            }
            }
            ?>

            <p><b><?php if(isset($msg)){?>
                   <?php echo $msg;?>
                <?php } ?>
            </b></p>

            <p>¿Aún no tienes cuenta? <a href="registro.php">Regístrate aquí</a>.</p>
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
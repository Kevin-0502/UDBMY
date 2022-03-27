<?php
include('config.php');
$login_button = '';
if(isset($_GET["code"]))
{
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
 if(!isset($token['error']))
 {
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];
   $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{
 $login_button = '<a href="'.$google_client->createAuthUrl().'">Login With Google</a>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>UDBmy</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" />

  <link rel="stylesheet" href="../../assets/css/signup.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
  <div id="container">
    <div class="form-wrap">
      <form action="?c=usuario&a=Guardar" method="post" id="frm-usuario" enctype="multipart/form-data">

        <div class="form-group">
          <label for="first-name">Nombre</label>
          <input type="text" name="nombres" />
          <span id="mensaje1" class="errores">Nombre no valido</sapnm>
        </div>
        <div class="form-group">
          <label for="last-name">Apellido</label>
          <input type="text" name="apellidos" id="apellido" />
          <span id="mensaje2" class="errores">Apellido no valido</span>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" />
          <span id="mensaje3" class="errores">Formato no valido</span>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" />
          <span id="mensaje4" class="errores">No puede quedar vacio</span>
        </div>
        <div class="form-group">
          <label for="password2">Confirmar Password</label>
          <input type="password" name="contraseña" id="password2"/>
          <span id="mensaje5" class="errores">No puede quedar vacio</span>
          <span id="mensaje6" class="errores">Las contraseñas no coiciden</span>
          <span id="mensaje7" class="errores">hgj</span>
        </div>
        <button id="enviar" type="submit" class="btn">Sign Up</button>
        <p class="bottom-text">
          Al clickear el boton Sign Up, estaás deacuerdo a nuestro
          <a href="#">Terminos y condiciones</a> and
          <a href="#">Politica de privacidad</a>
        </p>
      </form>
    </div>
      <?php
      if($login_button == '')
      {
        echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
        echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
        echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
        echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
        echo '<h3><a href="logout.php">Logout</h3></div>';
      }
      else
      {
        echo '<div align="center">'.$login_button . '</div>';
      }
      ?>
    </div>
    <footer>
      <p>Ya tienes cuenta? <a href="#">Ingresa acá</a></p>
    </footer>
  </div>

  <script src="../../assets/lib/validar_form.js"></script>
  <script>
    $(document).ready(function(){
        $("#frm-proveedor").submit(function(){
            return $(this).validate();
        });
    })
</script>
</body>

</html>
<!doctype html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php  echo base_url(); ?>/public/style.css">

  <title>Login</title>
</head>
<body>
  <div class="login-page">
    <div class="form">

      <form action="<?php echo base_url('/login') ?>" class="login-form" method="post">

        <input type="text" name="usuario" placeholder="Usuario" required />
        <input type="password" name="password" placeholder="Contraseña" required />

        <button>Entrar</button>
        <p class="message">No estas registrado? <a href="#">Crear una cuenta</a></p>
      </form>

      <form action="<?php echo base_url('/registro') ?>" class="register-form" method="post">

        <input type="text" name="nombre" placeholder="Nombre" required />
        <input type="text" name="appaterno" placeholder="Apellido Paterno" required />
        <input type="email" name="correo" placeholder="Correo" required />
        <input type="text" name="usuario" placeholder="Usuario" required />
        <input type="password" name="password" placeholder="Contraseña" required />
        <input type="hidden" name="tipo" id="tipo" value="adm" />
        

        <button>Crear</button>
        <p class="message">Ya estas registrado? <a href="#">Entrar</a></p>
      </form>

      

    </div>
  </div>
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'>
  </script><script  src="<?php  echo base_url(); ?>/public/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript">
    let mensaje = '<?php echo $mensaje ?>';
    if (mensaje == '0') {
      alert("error al iniciar");
    }else if(mensaje == '2'){
      alert("El usuario ya existe");
    }else if(mensaje == '3'){
      alert("Registro exitoso");
    }
  </script>
</body>
</html>
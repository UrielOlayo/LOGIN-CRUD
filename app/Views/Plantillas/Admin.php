<!doctype html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Administrador</title>
</head>
<body>

  <div class="area">

  </div>
  <nav class="main-menu">
    <ul>
      <li>
        <a href="http://justinfarrow.com">
          <i class="fa fa-home fa-2x"></i>
          <span class="nav-text">
            Inicio
          </span>
        </a>

      </li>
      <li class="has-subnav">
        <a href="#">
          <i class="fa fa-laptop fa-2x"></i>
          <span class="nav-text">
            Personas
          </span>
        </a>

      </li>
      <li class="has-subnav">
        <a href="#">
         <i class="fa fa-list fa-2x"></i>
         <span class="nav-text">
          Gastos
        </span>
      </a>
    </li>
  </ul>

  <ul class="logout">
    <li>
     <a href="<?php echo base_url('logout')?>">
       <i class="fa fa-power-off fa-2x"></i>
       <span class="nav-text">
        Logout
      </span>
    </a>
  </li>  
</ul>
</nav>
<div class="container">
  <h1>Bienvenido: <?php echo session('usuario')?></h1>
</div>
<div class="container">
  <h1>Gastos</h1>
  <div class="rou">
    <div class="col-sm-12">
      <form method="POST" action="<?php echo base_url().'/crear' ?>">
        <label for="gasto">Concepto de gasto</label>
        <input type="text" name="concepto" id="concepto" class="form-control">

        <label for="monto">Monto de gasto</label>
        <input type="text" name="monto" id="monto" class="form-control">

        <label for="Fecha">Fecha</label>
        <input type="date" name="fecha" id="fecha" class="form-control">

        <br>
        <button class="btn btn-primary">Guardar</button>
      </form>
    </div>
  </div>
  <hr>

  <h2>Listado de montos</h2>
  <div class="row">
    <div class="col-sm-12">
      <div class="table table-responsive">
        <table class="table table-hover table-bordered">
          <tr>
            <th>Concepto de gasto</th>
            <th>Monto de gasto</th>
            <th>Fecha</th>
            <th>Eliminar</th>
          </tr>
          <?php  foreach ($datos as $key): ?>
            <tr>
              <td><?php echo $key->concepto?></td>
              <td><?php echo $key->monto?></td>
              <td><?php echo $key->fecha?></td>
              
              <td>
                <a href="<?php echo base_url().'/eliminar/'.$key->id_gasto ?>" class="btn btn-danger btn-sm">Eliminar</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>

</div>

</body>
</html>

<style type="text/css">
  @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
}
@import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);
.fa-2x {
  font-size: 2em;
}
.fa {
  position: relative;
  display: table-cell;
  width: 60px;
  height: 36px;
  text-align: center;
  vertical-align: middle;
  font-size:20px;
}


.main-menu:hover,nav.main-menu.expanded {
  width:250px;
  overflow:visible;
}

.main-menu {
  background:#212121;
  border-right:1px solid #e5e5e5;
  position:absolute;
  top:0;
  bottom:0;
  height:100%;
  left:0;
  width:60px;
  overflow:hidden;
  -webkit-transition:width .05s linear;
  transition:width .05s linear;
  -webkit-transform:translateZ(0) scale(1,1);
  z-index:1000;
}

.main-menu>ul {
  margin:7px 0;
}

.main-menu li {
  position:relative;
  display:block;
  width:250px;
}

.main-menu li>a {
  position:relative;
  display:table;
  border-collapse:collapse;
  border-spacing:0;
  color:#999;
  font-family: arial;
  font-size: 14px;
  text-decoration:none;
  -webkit-transform:translateZ(0) scale(1,1);
  -webkit-transition:all .1s linear;
  transition:all .1s linear;
  
}

.main-menu .nav-icon {
  position:relative;
  display:table-cell;
  width:60px;
  height:36px;
  text-align:center;
  vertical-align:middle;
  font-size:18px;
}

.main-menu .nav-text {
  position:relative;
  display:table-cell;
  vertical-align:middle;
  width:190px;
  font-family: 'Titillium Web', sans-serif;
}

.main-menu>ul.logout {
  position:absolute;
  left:0;
  bottom:0;
}

.no-touch .scrollable.hover {
  overflow-y:hidden;
}

.no-touch .scrollable.hover:hover {
  overflow-y:auto;
  overflow:visible;
}

a:hover,a:focus {
  text-decoration:none;
}

nav {
  -webkit-user-select:none;
  -moz-user-select:none;
  -ms-user-select:none;
  -o-user-select:none;
  user-select:none;
}

nav ul,nav li {
  outline:0;
  margin:0;
  padding:0;
}
.main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
  color:#fff;
  background-color:#5fa2db;
}
.area {
  float: left;
  background: #e2e2e2;
  width: 100%;
  height: 100%;
}
@font-face {
  font-family: 'Titillium Web';
  font-style: normal;
  font-weight: 300;
  src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
}

</style>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
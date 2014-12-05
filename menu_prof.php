 <!-- Fixed navbar -->
 <?php
 require 'header.php';
 ?>
  <?php
 require 'footer.php';
 ?>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="indexprof.php">Home</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="ver_materias.php">Mostrar materias</a></li>
			<li><a href="endsesion.php">Cerrar Sesión</a></li>  
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
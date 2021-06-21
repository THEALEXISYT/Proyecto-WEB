<!DOCTYPE html>
<html>
<head>
  <?php 
		include 'php/head.php';
    $active_info=" active";
  ?>
  <title>Información</title>
  <link rel="shortcut icon" href="img/logo.ico">
</head>
<body>
  <header>
  <?php 
    include 'php/menu.php';
  ?>
</header>
<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Información</h1>
      <p>Aqui encontraras información de lo que hicimos en este proyecto con link de referencias. En la parte superior tenemos diferentes links donde te llevara a otros apartados que pueden interesarte.</p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
        <h2>Xampp</h2>
        <p>Xampp es una herramienta muy util si queremos crear nuestro propio proyecto ya que nos proporcionara en apenas 10 minutos todas las herramientas necesarias para poder ponerlo a funcionar.
         Xampp nos incluye los servicios Apache, MySQL, FileZilla Server, Mercury y TomCat para poder poner en marcha nuestro proyecto.</p><br>
        <p><a class="btn btn-secondary" href="https://www.apachefriends.org/es/index.html" target="_blank" role="button">Pagina Xampp »</a></p>
      </div>
      <div class="col-md-4">
        <h2>SublimeText</h2>
        <p>SublimeText es un software que nos permitio crear y editar codigo, con mucha comodidad, ya que nos permite seleccion multiple, edicion dividida, cambiar entre proyectos con un click,
        tambien nos permite editar cualquier tipo de codigo ya que implementa compatibilidad con muchos idiomas de programacion como PHP, MySQL, C#, Java, JavaScript, HTML, etc...</p>
        <p><a class="btn btn-secondary" href="https://www.sublimetext.com/" target="_blank" role="button">Pagina SublimeText »</a></p>
      </div>
      <div class="col-md-4">
        <h2>Bootstrap</h2>
        <p>Bootstrap es un kit de herramientas de codigo abierto mas popular ya que nos dan diferentes plantillas con las que podemos personalizarlo y crear nuestro proyecto con muchisimos estilos y Script.</p><br><br><br>
        <p><a class="btn btn-secondary" href="https://getbootstrap.com/" target="_blank" role="button">Pagina Bootstrap »</a></p>
      </div>
    </div>

    <hr>

  </div> <!-- /container -->

</main>
</body>
</html>
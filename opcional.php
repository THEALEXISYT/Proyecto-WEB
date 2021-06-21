<!DOCTYPE html>
<html>
<head>
  <?php 
		include 'php/head.php';
    $active_info=" active";
  ?>
  <title>opcional</title>
  <link rel="shortcut icon" href="img/logo.ico">
</head>
<body>
  <header>
  <?php 
    include 'php/menu.php';
  ?>
  <title>opcional</title>
<body>

 <script type="text/javascript">
 document.addEventListener("DOMContentLoaded", inicio, false);
 function inicio()
 {
 var nuevaImagen = new Image();
 alert("Se procede a la carga en memoria de la imagen");
 nuevaImagen = cargarImagen("../img/calvi.gif");
 }
 function cargarImagen(url)
 {
 var imagen = new Image();
 imagen.onload = imagenCargada;
 imagen.src = url;
 return imagen;
 }
 function imagenCargada()
 {
 alert("La imagen se ha cargado correctamente");
 }
</script>
<center><iframe src="../img/calvi.gif" width="15%" height="500">
</iframe>
<iframe src="../img/calvi2.webp" width="10%" height="270">
</iframe>
<iframe src="../img/calvi.gif" width="15%" height="500">
</iframe>
<iframe src="../img/calvi2.webp" width="10%" height="270">
</iframe>
<iframe src="../img/calvi.gif" width="15%" height="500">
</iframe>
<iframe src="../img/calvi2.webp" width="10%" height="270">
</iframe>
<iframe src="../img/calvi.gif" width="15%" height="500">
</iframe>
</center>
<center><iframe src="../img/calvi3.gif" width="22%" height="350">
</iframe>
<iframe src="../img/calvi4.gif" width="25%" height="300">
</iframe>
<video width="640" height="350" controls autoplay loop>
    <source src="../audio/video.mp4" type="video/mp4">
</video>
</center>
</body>
</html>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a href="inicio" class="nav-link" ><img src="/img/logo.png" width="100" height="50" /> <span class="sr-only"></span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item<?php echo $active_inicio;?>">
        <a href="inicio" class="nav-link" >Inicio <span class="sr-only"></span></a>
      </li>
      <li class="nav-item<?php echo $active_info;?>">
        <a href="informacion" class="nav-link">Información<span class="sr-only"></span></a>
      </li>
      <li class="nav-item<?php echo $active_pro;?>">
        <a href="proyecto" class="nav-link">Proyecto<span class="sr-only"></span></a>
      </li>
      <li class="nav-item<?php echo $active_quie;?>">
        <a class="nav-link" href="quienes-somos">¿Quienes somos?</a>
      </li>
      <li class="nav-item<?php echo $active_detalles;?>">
        <a class="nav-link" href="detalles">Detalles</a>
      </li>
      <li class="nav-item<?php echo $active_opcional;?>">
        <a href="opcional.php" class="nav-link">Seccion opcional<span class="sr-only"></span></a>
      </li>
    </ul>
    </form>
<!-- BEGINS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
<script type="text/javascript" src="https://hosted.muses.org/mrp.js"></script>
<script type="text/javascript">
MRP.insert({
'url':'http://icecast-streaming.nice264.com/europafm',
'lang':'es',
'codec':'mp3',
'volume':10,
'autoplay':true,
'forceHTML5':true,
'jsevents':true,
'buffering':0,
'title':'EuropaFM',
'wmode':'transparent',
'skin':'faredirfare',
'width':269,
'height':52
});
</script>
<!-- ENDS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
      <!--<audio src="audio/music.mp3" controls autoplay loop muted></audio>-->
  </div>
</nav>

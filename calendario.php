<?php include_once 'includes/templates/header.php'; ?>



<section class="seccion contenedor">
  <h2>Calendario de eventos</h2>
  
  <?php 
  
  try{
        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT * FROM eventos";
        $resultado = $conn->query($sql);

  } catch (\Exception $e) {
      echo $e->getMessage();
  }
  
  ?>
<div class="calendario">
<?php 
   $eventos= $resultado->fetch_assoc();
?>
<pre>
<?php 
  var_dump($eventos);
?>
</pre>


</div>
<?php 
  $conn->close();
?>
</section>
<!--seccion Galeria-->
<?php include_once 'includes/templates/footer.php'; ?>
<script src="js/vendor/modernizr-3.8.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
  window.jQuery ||
    document.write(
      '<script src="js/vendor/jquery-3.4.1.min.js"><\/script>'
    );
</script>
<script src="js/plugins.js"></script>
<script src="js/jquery.animateNumber.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.lettering.js"></script>
<script src="js/lightbox.js"></script>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
  window.ga = function() {
    ga.q.push(arguments);
  };
  ga.q = [];
  ga.l = +new Date();
  ga("create", "UA-XXXXX-Y", "auto");
  ga("set", "transport", "beacon");
  ga("send", "pageview");
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
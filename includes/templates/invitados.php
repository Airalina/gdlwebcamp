
    <?php

    try {
        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT * FROM `invitados`";

        $resultado = $conn->query($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }

    ?>
    <div class="calendario">
    <section class="invitados contenedor seccion">
<h2>Nuestros invitados</h2>
<ul class="lista-invitados clearfix">

        <?php

        while ($invitados = $resultado->fetch_assoc()) {   //Con el while se rellena una variable con los resultados del sql, se guardan en otro arreglo para luego agrupar segun el comentario //  echo $eventos['nombre_evento']; //           echo "<br>";    
        ?>
                
                        <li>
                            <div class="invitado">
                                <a class="invitado-info" href="#invitado<?php echo $invitados['invitado_id']; ?>">
                                     <img src="img/<?php echo $invitados['url_imagen']; ?>" alt="Imagen invitado">
                                </a>
                                <p><?php echo $invitados['nombre_invitado']." ".$invitados['apellido_invitado']; ?></p>
                            </div>
                            <!--invintado-->
                        </li>
                        <div style="display:none;">
                    <div class="invitado-info" id="invitado<?php echo $invitados['invitado_id']; ?>">
                    
                    <h2><?php echo $invitados['nombre_invitado']." ".$invitados['apellido_invitado']?> </h2>
                    <img src="img/<?php echo $invitados['url_imagen']; ?>" alt="Imagen invitado">
                  <p>  <?php echo $invitados['descripcion']; ?> </p>
                
                    </div></div>
                    
                        <?php } ?>
                        </ul>
                </section>
                <!--invitados-->
        </div>


    <?php $conn->close(); ?>
    
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
<script src="js/jquery.colorbox.js"></script>
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

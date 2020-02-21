<footer class="site-footer">
      <div class="contenedor clearfix">
        <div class="footer-informacion">
          <h3>Sobre <span>GdlWebCamp</span></h3>
          <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi veniam odio vel ipsa molestias consectetur eaque repudiandae deleniti, dignissimos voluptates recusandae neque praesentium animi, quae itaque repellendus quam porro suscipit.</P>
        </div><!--inf-->
          <div class="ultimos-tweets">  <h3>Ultimos <span>Tweets</span></h3>
          <ul><li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum perspiciatis delectus quod quasi.</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum perspiciatis delectus quod quasi.</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum perspiciatis delectus quod quasi.</li></ul>
          
          </div><!--tweets-->
          <div class="menu">  <h3>Redes <span>Sociles</span></h3>
            <nav class="redes-sociales">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-pinterest-p"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </nav>
          </div><!--menu-->
      </div><!--contenedor-->
      <p class="copyright">
        Todos los derechos reservados GDLWEBCAMP 2020
      </p>

    </footer>
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
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>

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

<?php 
  $archivo = basename($_SERVER['PHP_SELF']);
  $pagina = str_replace(".php", "", $archivo);
 if($pagina == 'conferencia'){
    echo '<script src="js/lightbox.js"></script>';
  } else if($pagina ==  'invitados' || $pagina == 'index'){
    echo '<script src="js/jquery.colorbox.js"></script>';
  }
?>
<script src="js/main.js"></script>
<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us4.list-manage.com","uuid":"3d3a2b3c7805b35a5163b8ffe","lid":"853aca361d","uniqueMethods":true}) })</script>
</body>
    </html>

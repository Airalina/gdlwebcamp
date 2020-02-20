<?php include_once 'includes/templates/header.php'; ?>


<section class="seccion contenedor">

  <h2>la mejor conferencia de diseño web en español</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, distinctio. Praesentium commodi incidunt
    magni? Hic, quos sunt! Debitis perferendis aliquam tempora repudiandae ipsum, laudantium molestiae veniam!
    Temporibus mollitia sapiente laudantium.</p>

</section>
<!--seccion-->
<section class="programa">
  <div class="contenedor-video">
    <video autoplay loop poster="img/bg-talleres.jpg">
      <source src="video/video.mp4" type="video/mp4">
      <source src="video/video.webm" type="video/webm">
      <source src="video/video.ogv" type="video/ogv">
    </video>
  </div>
  <!--contenedor video-->

  <div class="contenido-programa">
    <div class="contenedor">
      <div class="programa-evento">
        <h2>Programa del eveto</h2>
        <nav class="menu-programa">
          <a href="#talleres"><i class="fa fa-code" aria-hidden="true"></i>Talleres</a>
          <a href="#conferencias"><i class="fa fa-comment aria-hidden=" true"></i>Conferencias</a>
          <a href="#seminarios"><i class="fa fa-university" aria-hidden="true"></i>Seminarios</a>
        </nav>

        <div id="talleres" class="info-curso ocultar clearfix">
          <div class="detalle-evento">
            <h3>HTML5, CSS3 Y JavaScript</h3>
            <p><i class="fa fa-clock-o" aria-hidden="true"></i> 16:00 hrs</p>
            <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Juan Pablo de la torre</p>
          </div>
          <!--detalle evento-->
          <div class="detalle-evento">
            <h3>Responsive Web Design</h3>
            <p><i class="fa fa-clock-o" aria-hidden="true"></i> 20:00 hrs</p>
            <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Juan Pablo de la torre</p>
          </div>
          <!--detalle evento-->
          <a href="#" class="button float-right">Ver Todos</a>
        </div>
        <!--talleres-->
        <div id="conferencias" class="info-curso ocultar clearfix">
          <div class="detalle-evento">
            <h3>Cómo ser freelancer?</h3>
            <p><i class="fa fa-clock-o" aria-hidden="true"></i> 10:00 hrs</p>
            <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Gregorio Sanchez</p>
          </div>
          <!--detalle evento-->
          <div class="detalle-evento">
            <h3>Tecnologias del futuro</h3>
            <p><i class="fa fa-clock-o" aria-hidden="true"></i> 17:00 hrs</p>
            <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Susan Sanchez</p>
          </div>
          <!--detalle evento-->
          <a href="#" class="button float-right">Ver Todos</a>
        </div>
        <!--talleres-->
        <div id="seminarios" class="info-curso ocultar clearfix">
          <div class="detalle-evento">
            <h3>Diseño UI/UX para moviles</h3>
            <p><i class="fa fa-clock-o" aria-hidden="true"></i> 17:00 hrs</p>
            <p><i class="fa fa-calendar" aria-hidden="true"></i> 11 de Dic</p>
            <p><i class="fa fa-user" aria-hidden="true"></i>Harold Garcia</p>
          </div>
          <!--detalle evento-->
          <div class="detalle-evento">
            <h3>Aprende a programar en una mañana</h3>
            <p><i class="fa fa-clock-o" aria-hidden="true"></i> 20:00 hrs</p>
            <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Juan Pablo de la torre</p>
          </div>
          <!--detalle evento-->
          <a href="#" class="button float-right">Ver Todos</a>
        </div>
        <!--talleres-->
        <div id="conferencias">


        </div>
        <!--conferencias-->


        <div id="seminarios">



        </div>
        <!--seminarios-->
      </div>
      <!--programa-evento-->
    </div>
    <!--contenedor-->
  </div>
  <!--contenido-programa-->
  <section class="invitados contenedor seccion">
    <h2>Nuestros invitados</h2>
    <ul class="lista-invitados clearfix">
      <li>
        <div class="invitado">
          <img src="img/invitado1.jpg" alt="Imagen invitado">
          <p>Rafael Bautista</p>
        </div>
        <!--invintado-->
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado2.jpg" alt="Imagen invitado">
          <p>Shari Herrera</p>
        </div>
        <!--invintado-->
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado3.jpg" alt="Imagen invitado">
          <p>Gregorio Sanchez</p>
        </div>
        <!--invintado-->
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado4.jpg" alt="Imagen invitado">
          <p>Susana Rivera</p>
        </div>
        <!--invintado-->
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado5.jpg" alt="Imagen invitado">
          <p>Harold Garcia</p>
        </div>
        <!--invintado-->
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado6.jpg" alt="Imagen invitado">
          <p>Susana Sanchez</p>
        </div>
        <!--invintado-->
      </li>
    </ul>
  </section>
  <!--invitados-->
</section>
<!--programa-->
<div class="contador parallax">
  <div class="contenedor">
    <ul class="resumen-evento clearfix">
      <li>
        <p class="numero"></p>Invitados
      </li>
      <li>
        <p class="numero"></p>Talleres
      </li>
      <li>
        <p class="numero"></p>Dias
      </li>
      <li>
        <p class="numero"></p>Conferencias
      </li>
    </ul>
  </div>
  <!--contenedor-->
</div>
<!--contador-->
<section class="precios seccion">
  <h2>Precios</h2>
  <div class="contenedor">
    <ul class="lista-precios clearfix">
      <li>
        <div class="tabla-precio">
          <h3>Pase por día</h3>
          <p class="numero">$30</p>
          <ul>
            <li>Bocadillos Gratis</li>
            <li>Todas las conferencias</li>
            <li>Todos los Talleres</li>
          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>
        <!--tablaPrecio-->
      </li>
      <!--descripcion-->
      <li>
        <div class="tabla-precio">
          <h3>Pase por día</h3>
          <p class="numero">$50</p>
          <ul>
            <li>Bocadillos Gratis</li>
            <li>Todas las conferencias</li>
            <li>Todos los Talleres</li>
          </ul>
          <a href="#" class="button">Comprar</a>
        </div>
        <!--tablaPrecio-->
      </li>
      <!--descripcion-->
      <li>
        <div class="tabla-precio">
          <h3>Pase por 2 días</h3>
          <p class="numero">$45</p>
          <ul>
            <li>Bocadillos Gratis</li>
            <li>Todas las conferencias</li>
            <li>Todos los Talleres</li>
          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>
        <!--tablaPrecio-->
      </li>
      <!--descripcion-->
    </ul>
    <!--listaprecios-->
  </div>
  <!--contenedor-->
</section>
<!--precios-->
<div class="mapa" id="mapa">
</div>
<!--mapa-->
<section class="seccion">
  <h2>Testimoniales</h2>
  <div class="testimoniales contenedor clearfix">
    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptatem, repudiandae eius iure
          reiciendis
          dolore voluptate voluptatum explicabo ducimus nobis beatae? Officia voluptas minima quos. Aliquid repellat
          exercitationem animi nobis?</p>
        <footer class="info-testimonial clearfix"><img src="img/testimonial.jpg" alt="Testimonio">
          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div>
    <!--testimonial-->
    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptatem, repudiandae eius iure
          reiciendis
          dolore voluptate voluptatum explicabo ducimus nobis beatae? Officia voluptas minima quos. Aliquid repellat
          exercitationem animi nobis?</p>
        <footer class="info-testimonial clearfix"><img src="img/testimonial.jpg" alt="Testimonio">
          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div>
    <!--testimonial-->
    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptatem, repudiandae eius iure
          reiciendis
          dolore voluptate voluptatum explicabo ducimus nobis beatae? Officia voluptas minima quos. Aliquid repellat
          exercitationem animi nobis?</p>
        <footer class="info-testimonial clearfix"><img src="img/testimonial.jpg" alt="Testimonio">
          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div>
    <!--testimonial-->
  </div>
  <!--testimoniales-->
</section>
<!--seccion-testimoniales-->
<div class="newsletter parallax">
  <div class="contenido contenedor">
    <p>Registrate al newsletter:</p>
    <h3>GdlWebCamp</h3>
    <a href="#" class="button transparente">Registro</a>
  </div>
  <!--contenido&contenedor-->
</div>
<!--newsletter-->
<section class="seccion">
  <h2>Faltan</h2>
  <div class="cuenta-regresiva contenedor">
    <ul class="clearfix">
      <li>
        <p id="dias" class="numero"></p>dias
      </li>
      <li>
        <p id="horas" class="numero"></p>horas
      </li>
      <li>
        <p id="minutos" class="numero"></p>minutos
      </li>
      <li>
        <p id="segundos" class="numero"></p>segundos
      </li>
    </ul>
  </div>
  <!--cuenta regresiva-->
</section>
<!--seccion cuenta regresiva-->
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
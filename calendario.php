<?php include_once 'includes/templates/header.php'; ?>



<section class="seccion contenedor">
    <h2>Calendario de eventos</h2>

    <?php

    try {
        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado FROM eventos INNER JOIN categoria_evento ON eventos.id_cat_evento = categoria_evento.id_categoria INNER JOIN invitados ON eventos.id_inv = invitados.invitado_id ORDER BY evento_id";

        $resultado = $conn->query($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }

    ?>
    <div class="calendario">
            <?php

                $calendario = array();
                     while ($eventos = $resultado->fetch_assoc()) {  //Con el while se rellena una variable con los resultados del sql, se guardan en otro arreglo para luego agrupar segun el comentario //  echo $eventos['nombre_evento']; //           echo "<br>";   
         $fecha = $eventos['fecha_evento'];
             $evento = array(
              'titulo' => $eventos['nombre_evento'],
              'fecha' => $eventos['fecha_evento'],
              'hora' => $eventos['hora_evento'],
              'categoria' => $eventos['cat_evento'],
              'icono' => 'fa' . " " . $eventos['icono'],
              'invitado' => $eventos['nombre_invitado'] ." ". $eventos['apellido_invitado']
          );
         // $calendario[] = $evento;
         $calendario[$fecha][] = $evento; //para agrupar de mismo algo, como fecha

        
        } ?> 
            <?php 
                //imprimir los datos guardados anteriormente (fechas)
            foreach($calendario as $dia => $lista_eventos){     ?>
                <h3>
                    <i class="fas fa-calendar-alt"></i>
                    <?php setlocale(LC_TIME, 'spanish');
                     //echo date("F j, Y", strtotime($dia)); 
                     //reseteando la fecha
                     echo strftime("%A, %d de %B del %Y", strtotime($dia) ); ?>
                    
                </h3>

                <?php //imprimir el contenido del evento 
                foreach($lista_eventos as $evento){   ?>
                    <div class = "dia">
                            
                            <p class="titulo"><?php echo utf8_encode($evento['titulo']); ?></p>
                            <p class="hora"><i class="fa fa-clock" aria-hidden="true"> </i>
                              <?php echo $evento['fecha'] . " " . $evento['hora']; ?></p>
                            <p>
                              <i class="<?php echo $evento ['icono'];?>" aria-hidden="true"> </i>
                              <?php echo $evento['categoria']; ?>
                            </p>
                         
                            <p class="invitado">
                              <i class="fa fa-user" aria-hidden="true"> </i>
                              <?php echo $evento['invitado']; ?>
                            </p>
        </div>
        <?php   }?>
        
        <?php  } ?>
   
    <?php $conn->close(); ?>
    </div>
</section>
<!--seccion Galeria-->

<?php include_once 'includes/templates/footer.php'; ?>

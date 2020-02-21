<?php
//funcion para regresar a json
function productos_json(&$boletos, &$camisas = 0, &$etiquetas = 0){
        //sustituir las posiciones del array del pedido por llaves para saber que boleto esta seleccionando
        $dias = array(0 => 'un_dia', 1 => 'pase_completo', 2 => 'pase_2dias');
        $total_boletos = array_combine($dias, $boletos);
        $json= array();

        foreach($total_boletos as $key => $boletos){

            if((int) $boletos > 0):

                    $json[$key] = (int) $boletos;
            endif;

     

        return json_encode($json);
    }

}







?>
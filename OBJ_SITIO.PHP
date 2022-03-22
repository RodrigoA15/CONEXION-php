<?php
 require_once ("CONEXION_SITIO.PHP");

 $objsitio = new sitio();
 //$insertarsitio = $objsitio->insertarsitio("Popayan", "Comfacauca", "Pisoje");
    //echo $insertarsitio;

    //MODIFICAR USUARIOS
$editarsitio = $objsitio->editarsitio(1, "cali", "Parque de las banderas", "Valle");

    $versitios=$objsitio->getsitios();

    print_r('<pre>');
    print_r($versitios);
    print_r('</pre>');
?>
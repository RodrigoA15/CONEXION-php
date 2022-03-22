<?php
    require_once("USUARIO.PHP");

    $objusuario = new usuario();
    //$insertarusuario = $objusuario->insertarusuario("Rodrigo andres", "rodrigo@gmail.com", 123456);
    //echo $insertarusuario;

//MODIFICAR USUARIOS
//$editarusuario = $objusuario->editarUsuario(3, "Melissa ", "Melissa@gmail.com", 54321);

//ELIMINAR USUARIO

//$eliminarusuario = $objusuario->eliminarusuario(3);

    //VER LA LISTA DE USUARIOS
   // $verusuario=$objusuario->getusuarios();

    //print_r('<pre>');
    //print_r($verusuario);
    //print_r('</pre>');

    //ver 1 solo usuario
    $idusuario = $objusuario->getidusuario(4);
    print_r('<pre>');
    print_r($idusuario);
    print_r('</pre>');
?>
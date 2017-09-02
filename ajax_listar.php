<?php


 // if(isset($_POST['alumnos'])){
 //   require_once "b_controlador/controller.php";
 //   require_once "a_modelo/model.php";
 //   $vistaUsuario = new MvcController();
 //   $vistaUsuario ->vistaUsuarioController();
 //
 //  }
 echo "<br>";


 if(isset($_POST["nombre"])){


       echo "<br>";
        require_once "b_controlador/controller.php";
        require_once "a_modelo/model.php";
        $vistaUsuario = new MvcController();
        $vistaUsuario ->vistaUsuarioController();

}

 ?>

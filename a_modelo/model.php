<?php
require_once "conexion.php";
  class Datos extends Conexion{

    //VISTA DE USUARIOS
      public function vistaUsuarioModel($tabla){
          $stmt= Conexion::conectar()->prepare("SELECT idusuario,nombre,apellidos,dni  FROM $tabla ");
          $stmt ->execute();
          //FETCH() =Obtine una fila de un c onjunto de resultadios asociados al objeto PDOSatatment.
          //FETCHALL() =Obtine una TODAS las filas de un c onjunto de  resultadios asociados al objeto PDOSatatment.
          return $stmt ->fetchAll();
         $stmt ->close();
      }


  }


 ?>

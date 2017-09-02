<?php
  class MvcController{
    //VISTA DE USUARIOS
      public function vistaUsuarioController(){
         $respueta = Datos::vistaUsuarioModel("usuario");
         //  var_dump($respueta);
         echo '<center><table border="1">';
         foreach ($respueta as $row => $item) {
           echo '
                 <tr>
                    <td>'.$item["idusuario"].'</td>
                     <td>'.$item["nombre"].'</td>
                     <td>'.$item["apellidos"].'</td>
                     <td>'.$item["dni"].'</td>
                     <td><a href="#"><input type="button" name="" value="Editar"></a></td>
                     <td> <a href="#"><input type="button" name="" value="Borrar"></a></td>
                </tr>

           ';
         }
         echo '</table></center>';
      }

  }





 ?>

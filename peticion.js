//$(obtener_registros()); //



// $("#boton").click(function(){

  // function obtener_registros(alumnos)
  // {
  // 	$.ajax({
  // 		url : 'ajax_listar.php',
  // 		type : 'POST',
  // 		dataType : 'html',
  // 		data : { alumnos: alumnos },
  // 		})
  //
  // 	.done(function(resultado){
  // 		$("#contenido").html(resultado);
  // 	})
  // }

// });


  // $('.lula').hide();


  function enviar_datos_ajax(){
    var n = "al";
    var url = "ajax_listar.php";
    $.ajax({

      type:"post",
      url:url,
      data:{nombre:n},

      success:function(data){
        $("#contenido").html(data);
        $('.campo').hide() //ocultando el div CAMPO
      }

    })
  }

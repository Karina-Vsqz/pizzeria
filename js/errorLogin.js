/*$("#errorLog").ready(function()
{
    Swal.fire({
        title: "Contraseña Incorrecta",
        text: "Su contraseña de usuario es Incorrecta",
        icon: "error",
        confirmButtonText: "Ok",
        //footer:'El tiempo de su pedido sera estimado en la seccion de pedidos',
        allowOutsideClick: false,
        allowEscapeKey: false,
        allowEnterKey: false,
        stopKeydpwnPropagation: false
        //toast:true
    });
    
});*/
Swal.fire({
    type: "error",
    title: "Error al Ingresar",
    showConfirmButton: true,
    confirmButtonText: "Cerrar"
  }).then(function(result){
      if(result.value)
      {
          window.location="../index.php";
      }
  });

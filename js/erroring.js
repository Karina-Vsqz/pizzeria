Swal.fire({
    icon:'error',
    //type: "error",
    title: "Error al Ingresar",
    showConfirmButton: true,
    confirmButtonText: "Cerrar",
    footer: "Usuario Incorrecto o Registrese si no tiene usuario",
    allowOutsideClick:false,
    allowEscapeKey:false,
    allowEnterKey:false,
    stopKeydpwnPropagation:false
  }).then(function(result){
      if(result.value)
      {
          window.location="../index.php";
      }
  });

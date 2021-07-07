Swal.fire({
    icon:'success',
    //type: "error",
    title: "Sesion terminada",
    showConfirmButton: true,
    confirmButtonText: "Cerrar",
    footer: "Puede volver a ingresar desde la pagina de inicio",
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

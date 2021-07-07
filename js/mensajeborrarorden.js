Swal.fire({
    icon:'success',
    title: "Orden cancelada",
    text:'Su compra ha sido cancelada con exito',
    showConfirmButton: true,
    confirmButtonText: "Cerrar",
    footer: "Puede ordenar productos distintos",
    allowOutsideClick:false,
    allowEscapeKey:false,
    allowEnterKey:false,
    stopKeydpwnPropagation:false
  }).then(function(result){
      if(result.value)
      {
          window.location="../orden.php#fh5co-why-us";
      }
});
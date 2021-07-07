Swal.fire({
    icon:'success',
    title: "Operacion exitosa",
    text:'Registro de cuenta bancaria con ecito',
    showConfirmButton: true,
    confirmButtonText: "Cerrar",
    footer: "Se ha registrado su tarjeta bancaria",
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
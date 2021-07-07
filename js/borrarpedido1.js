
  $("#ordenlist").click(function(id){
    $dato=id;
    Swal.fire({
        icon:'question',
        //type: "error",
        title: "Desea borrar la orden",
        showConfirmButton: true,
        confirmButtonText: "Borrar",
        cancelButtonText:'Cancelar ',
        footer: "...",
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false
      }).then(function(result){
          if(result.value)
          {
            window.location="assets/borrarorden.php?o="+$dato;
          }
          else
          {
            window.location="../orden.php?o="+$dato;
          }
      });
    
  });
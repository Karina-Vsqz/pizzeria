/*return Swal.fire({
     title:'Compra Hecha',
     text:'Su compra se ha agregado a su pedido',
     icon:'success',
     html: 'Ha seleccionado Agua 600 mililitros'
    })
*/
Swal.fire({
        icon:'success',
        title: "Compra Hecha",
        text:'Su compra se ha agregado a su pedido',
        showConfirmButton: true,
        confirmButtonText: "Cerrar",
        footer: "Se ha agregado su compra",
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false
      }).then(function(result){
          if(result.value)
          {
              window.location="../iniciousuario.php";
          }
});
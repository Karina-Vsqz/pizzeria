$("#pedido1").click(function(e){
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'chica': 'Chica',
            'mediana': 'Mediana',
            'grande': 'Grande',
            'extra': 'Extra Grande'
          })
        }, 1000)
      })
      
      const { value: tamanio } = Swal.fire({
        title: 'Seleccione tamaño de su Pizza:<br>Asuncion',
        input: 'radio',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        inputOptions: inputOptions,
        cancelButtonText:'Cancelar Compra',
        confirmButtonText:'Añadir al pedido',
        footer:'Costos: <br>Chica $130.00 MXN <br>Mediana $150.00 MXN <br>Grande $170.00 MXN <br>Extra Grande $190.00 MXN <br>El tiempo de su pedido sera estimado en la seccion de Orden',
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false,
        inputValidator: (value) => {
          if (!value) {
            return 'Debe escoger un tamaño de pizza a ordenar'
          }
         else{
              if(value=='chica')
              {
                window.location.href="assets/registroproductoget.php?p=1";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Chica' })
              }
              if(value=='mediana')
              {
                window.location.href="assets/registroproductoget.php?p=2";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Mediana' })
              }
              if(value=='grande')
              {
                window.location.href="assets/registroproductoget.php?p=3";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Grande' })
              }
              if(value=='extra')
              {
                window.location.href="assets/registroproductoget.php?p=4";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Extra Grande' })
              }
              return ''
          }
        }
        
      })
      
     /* if (tamanio) {
        
      }*/
      /*else{
        Swal.fire({ html: 'No selecciono su tamaño de Pizza' })
      }*/
});
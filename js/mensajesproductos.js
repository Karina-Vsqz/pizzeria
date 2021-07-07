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
$("#pedido2").click(function(){
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
        title: 'Seleccione tamaño de su Pizza:<br>Hawaina',
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
                window.location.href="assets/registroproductoget.php?p=5";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Chica' })
              }
              if(value=='mediana')
              {
                window.location.href="assets/registroproductoget.php?p=6";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Mediana' })
              }
              if(value=='grande')
              {
                window.location.href="assets/registroproductoget.php?p=7";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Grande' })
              }
              if(value=='extra')
              {
                window.location.href="assets/registroproductoget.php?p=8";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Extra Grande' })
              }
              return ''
          }
        }
        
      })
      

});
$("#pedido3").click(function(){
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
        title: 'Seleccione tamaño de su Pizza:<br>Mexicana',
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
                window.location.href="assets/registroproductoget.php?p=9";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Chica' })
              }
              if(value=='mediana')
              {
                window.location.href="assets/registroproductoget.php?p=10";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Mediana' })
              }
              if(value=='grande')
              {
                window.location.href="assets/registroproductoget.php?p=11";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Grande' })
              }
              if(value=='extra')
              {
                window.location.href="assets/registroproductoget.php?p=12";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Extra Grande' })
              }
              return ''
          }
        }
        
      })
      

});
$("#pedido4").click(function(){
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
        title: 'Seleccione tamaño de su Pizza:<br>Italiana',
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
                window.location.href="assets/registroproductoget.php?p=13";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Chica' })
              }
              if(value=='mediana')
              {
                window.location.href="assets/registroproductoget.php?p=14";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Mediana' })
              }
              if(value=='grande')
              {
                window.location.href="assets/registroproductoget.php?p=15";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Grande' })
              }
              if(value=='extra')
              {
                window.location.href="assets/registroproductoget.php?p=16";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Extra Grande' })
              }
              return ''
          }
        }
        
      })
      

});
$("#pedido5").click(function(){
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
        title: 'Seleccione tamaño de su Pizza:<br>Azteca',
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
                window.location.href="assets/registroproductoget.php?p=17";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Chica' })
              }
              if(value=='mediana')
              {
                window.location.href="assets/registroproductoget.php?p=18";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Mediana' })
              }
              if(value=='grande')
              {
                window.location.href="assets/registroproductoget.php?p=19";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Grande' })
              }
              if(value=='extra')
              {
                window.location.href="assets/registroproductoget.php?p=20";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Extra Grande' })
              }
              return ''
          }
        }
        
      })

});
$("#pedido6").click(function(){
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
        title: 'Seleccione tamaño de su Pizza:<br>Pepperoni',
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
                window.location.href="assets/registroproductoget.php?p=21";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Chica' })
              }
              if(value=='mediana')
              {
                window.location.href="assets/registroproductoget.php?p=22";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Mediana' })
              }
              if(value=='grande')
              {
                window.location.href="assets/registroproductoget.php?p=23";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Grande' })
              }
              if(value=='extra')
              {
                window.location.href="assets/registroproductoget.php?p=24";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Tamaño de pizza seleccionado: Extra Grande' })
              }
              return ''
          }
        }
        
      })

});

$("#pedido_hamburguesa").click(function(){
  const inputOptions = new Promise((resolve) => {
      setTimeout(() => {
        resolve({
          'hawaina': 'Hawaina',
          'clasica': 'Clasica',
          'doble': 'Doble'
        })
      }, 1000)
    })
    
    const { value: tamanio } = Swal.fire({
      title: 'Seleccione tipo de <br>Hamburguesa',
      input: 'radio',
      showCancelButton: true,
      cancelButtonColor: '#d33',
      inputOptions: inputOptions,
      cancelButtonText:'Cancelar Compra',
      confirmButtonText:'Añadir al pedido',
      footer:'Costos: <br>Hamburguesa Hawaina: $60.00 MXN <br>Hamburguesa Clasica: $45.00 MXN <br>Hamburguesa Doble: $80.00 MXN <br>El tiempo de su pedido sera estimado en la seccion de Orden',
      allowOutsideClick:false,
      allowEscapeKey:false,
      allowEnterKey:false,
      stopKeydpwnPropagation:false,
      inputValidator: (value) => {
        if (!value) {
          return 'Debe escoger Hanburguesa a ordenar'
        }
       else{
            if(value=='hawaina')
            {
              window.location.href="assets/registroproductoget.php?p=25";
              //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Hamburguesa seleccionada: Hawaina' })
            }
            if(value=='clasica')
            {
              window.location.href="assets/registroproductoget.php?p=26";
              //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Hamburguesa seleccionada: Clasica' })
            }
            if(value=='doble')
            {
              window.location.href="assets/registroproductoget.php?p=27";
              //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Hamburguesa seleccionada: Doble' })
            }
            return ''
        }
      }
      
    })

});

$("#pedido_hotdog").click(function(){
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'hsolo': '1 Hotdog',
            'hdoble': '2 Hotdogs',
            'htriple': '3 Hotdogs'
          })
        }, 1000)
      })
      
      const { value: tamanio } = Swal.fire({
        title: 'Seleccione cantidad de <br>Hotdogs',
        input: 'radio',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        inputOptions: inputOptions,
        cancelButtonText:'Cancelar Compra',
        confirmButtonText:'Añadir al pedido',
        footer:'Costos: <br>1 Hotdog: $15.00 MXN <br>2 Hotdogs: $30.00 MXN <br>3 Hotdogs: $40.00 MXN <br>El tiempo de su pedido sera estimado en la seccion de Orden',
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false,
        inputValidator: (value) => {
          if (!value) {
            return 'Debe escoger Hotdogs para ordenar'
          }
         else{
              if(value=='hsolo')
              {
                window.location.href="assets/registroproductoget.php?p=28";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado 1 Hotdog' })
              }
              if(value=='hdoble')
              {
                window.location.href="assets/registroproductoget.php?p=29";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado 2 Hotdogs' })
              }
              if(value=='htriple')
              {
                window.location.href="assets/registroproductoget.php?p=30";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado 3 Hotdogs' })
              }
              return ''
          }
        }
        
      })
  
  });

  $("#pedido_alita").click(function(){
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'alitabbq': 'Alitas Barbiquiu',
            'alitachipotle': 'Alitas Chipotle',
            'alitahabanero': 'Alitas Habanero'
          })
        }, 1000)
      })
      
      const { value: tamanio } = Swal.fire({
        title: 'Seleccione orden de <br>Alitas',
        input: 'radio',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        inputOptions: inputOptions,
        cancelButtonText:'Cancelar Compra',
        confirmButtonText:'Añadir al pedido',
        footer:'Costos: <br>Orden Alitas Barbiquiu: $70.00 MXN <br>Orden Alitas Chipotle: $70.00 MXN <br>Orden Alitas Habanero: $80.00 MXN <br>El tiempo de su pedido sera estimado en la seccion de Orden',
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false,
        inputValidator: (value) => {
          if (!value) {
            return 'Debe escoger una orden de alitas'
          }
         else{
              if(value=='alitabbq')
              {
                window.location.href="assets/registroproductoget.php?p=31";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Orden de alitas Barbiquiu'})
              }
              if(value=='alitachipotle')
              {
                window.location.href="assets/registroproductoget.php?p=32";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Orden de alitas Chipotle' })
              }
              if(value=='alitahabanero')
              {
                window.location.href="assets/registroproductoget.php?p=33";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado orden de alitas Habanero' })
              }
              return ''
          }
        }
        
      })
  
  });

  $("#pedido_torta").click(function(){
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'hawaina': 'Torta Hawaina',
            'cubana': 'Torta Cubana',
            'jamon': 'Torta de Jamon',
            'chorizo':'Torta de Chorizo'

          })
        }, 1000)
      })
      
      const { value: tamanio } = Swal.fire({
        title: 'Seleccione tipo de <br>Torta',
        input: 'radio',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        inputOptions: inputOptions,
        cancelButtonText:'Cancelar Compra',
        confirmButtonText:'Añadir al pedido',
        footer:'Costos: <br>Torta Hawaina: $60.00 MXN <br>Torta Cubana: $60.00 MXN <br>Torta de jamon: $30.00 MXN<br>Torta de Chorizo: $30.00 MXN<br>El tiempo de su pedido sera estimado en la seccion de Orden',
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false,
        inputValidator: (value) => {
          if (!value) {
            return 'Debe escoger una Torta'
          }
         else{
              if(value=='hawaina')
              {
                window.location.href="assets/registroproductoget.php?p=34";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Torta Hawaina'})
              }
              if(value=='cubana')
              {
                window.location.href="assets/registroproductoget.php?p=35";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Torta Cubana' })
              }
              if(value=='jamon')
              {
                window.location.href="assets/registroproductoget.php?p=36";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Torta de Jamon' })
              }
              if(value=='chorizo')
              {
                window.location.href="assets/registroproductoget.php?p=37";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Torta de Chorizo' })
              }
              return ''
          }
        }
        
      })
  
  });
  $("#pedido_papas").click(function(){
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'papachica': 'Orden Papas Chicas',
            'papamedianas': 'Orden Papas Medianas',
            'papagrande': 'Orden Papas Grandes'
          })
        }, 1000)
      })
      
      const { value: tamanio } = Swal.fire({
        title: 'Seleccione tipo de Orden de <br>Papas',
        input: 'radio',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        inputOptions: inputOptions,
        cancelButtonText:'Cancelar Compra',
        confirmButtonText:'Añadir al pedido',
        footer:'Costos: <br>Orden de Papas Chicas: $30.00 MXN <br>Orden de Papas Medianas: $45.00 MXN <br>Orden de Papas Grandes: $60.00 MXN<br>El tiempo de su pedido sera estimado en la seccion de Orden',
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false,
        inputValidator: (value) => {
          if (!value) {
            return 'Debe escoger una Orden de Papas'
          }
         else{
              if(value=='papachica')
              {
                window.location.href="assets/registroproductoget.php?p=38";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Orden de Papas Chicas'})
              }
              if(value=='papamedianas')
              {
                window.location.href="assets/registroproductoget.php?p=39";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Orden de Papas Medianas' })
              }
              if(value=='papagrande')
              {
                window.location.href="assets/registroproductoget.php?p=40";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Orden de Papas Grande' })
              }
              return ''
          }
        }
        
      })
  
  });
  $("#pedido_refresco3").click(function(){
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'coca3': 'Coca Cola',
            'fanta3': 'Fanta',
            'sprite3': 'Sprite',
            'fresca3': 'Fresca'
          })
        }, 1000)
      })
      
      const { value: tamanio } = Swal.fire({
        title: 'Seleccione su Refresco <br>3 Litros',
        input: 'radio',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        inputOptions: inputOptions,
        cancelButtonText:'Cancelar Compra',
        confirmButtonText:'Añadir al pedido',
        footer:'Costos: <br>Refrescos 3 Litros: $35.00 MXN <br>El tiempo de su pedido sera estimado en la seccion de Orden',
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false,
        inputValidator: (value) => {
          if (!value) {
            return 'Debe escoger un Refresco'
          }
         else{
              if(value=='coca3')
              {
                window.location.href="assets/registroproductoget.php?p=41";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Coca Cola 3 Litros'})
              }
              if(value=='fanta3')
              {
                window.location.href="assets/registroproductoget.php?p=42";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Fanta 3 Litros' })
              }
              if(value=='sprite3')
              {
                window.location.href="assets/registroproductoget.php?p=43";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Sprite 3 Litros' })
              }
              if(value=='fresca3')
              {
                window.location.href="assets/registroproductoget.php?p=44";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Fresca 3 Litros' })
              }
              return ''
          }
        }
        
      })
  
  });
  $("#pedido_refresco2").click(function(){
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'coca2': 'Coca Cola',
            'fanta2': 'Fanta',
            'sprite2': 'Sprite',
            'fresca2': 'Fresca'
          })
        }, 1000)
      })
      
      const { value: tamanio } = Swal.fire({
        title: 'Seleccione su Refresco <br>2 Litros',
        input: 'radio',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        inputOptions: inputOptions,
        cancelButtonText:'Cancelar Compra',
        confirmButtonText:'Añadir al pedido',
        footer:'Costos: <br>Refrescos 2 Litros: $30.00 MXN <br>El tiempo de su pedido sera estimado en la seccion de Orden',
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false,
        inputValidator: (value) => {
          if (!value) {
            return 'Debe escoger un Refresco'
          }
         else{
              if(value=='coca2')
              {
                window.location.href="assets/registroproductoget.php?p=45";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Coca Cola 2 Litros'})
              }
              if(value=='fanta2')
              {
                window.location.href="assets/registroproductoget.php?p=46";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Fanta 2 Litros' })
              }
              if(value=='sprite2')
              {
                window.location.href="assets/registroproductoget.php?p=47";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Sprite 2 Litros' })
              }
              if(value=='fresca2')
              {
                window.location.href="assets/registroproductoget.php?p=48";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Fresca 2 Litros' })
              }
              return ''
          }
        }
        
      })
  
  });

  $("#pedido_refresco600").click(function(){
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'coca600': 'Coca Cola',
            'fanta600': 'Fanta',
            'sprite600': 'Sprite',
            'fresca600': 'Fresca'
          })
        }, 1000)
      })
      
      const { value: tamanio } = Swal.fire({
        title: 'Seleccione su Refresco <br>600 ml',
        input: 'radio',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        inputOptions: inputOptions,
        cancelButtonText:'Cancelar Compra',
        confirmButtonText:'Añadir al pedido',
        footer:'Costos: <br>Refrescos 600 mililitros: $15.00 MXN <br>El tiempo de su pedido sera estimado en la seccion de Orden',
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false,
        inputValidator: (value) => {
          if (!value) {
            return 'Debe escoger un Refresco'
          }
         else{
              if(value=='coca600')
              {
                window.location.href="assets/registroproductoget.php?p=49";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Coca Cola 600 mililitros'})
              }
              if(value=='fanta600')
              {
                window.location.href="assets/registroproductoget.php?p=50";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Fanta 600 mililitros' })
              }
              if(value=='sprite600')
              {
                window.location.href="assets/registroproductoget.php?p=51";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Sprite 600 mililitros' })
              }
              if(value=='fresca600')
              {
                window.location.href="assets/registroproductoget.php?p=52";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Fresca 600 mililitros' })
              }
              return ''
          }
        }
        
      })
  
  });
  $("#pedido_agua").click(function(){
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'aguachica': 'Agua 600 ml',
            'aguagrande': 'Agua 1 Litro'
          })
        }, 1000)
      })
      
      const { value: tamanio } = Swal.fire({
        title: 'Seleccione tamaño de su <br>Agua',
        input: 'radio',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        inputOptions: inputOptions,
        cancelButtonText:'Cancelar Compra',
        confirmButtonText:'Añadir al pedido',
        footer:'Costos: <br>Agua 600 ml: $8.00 MXN <br>Agua 1 litro: $15.00 MXN <br>El tiempo de su pedido sera estimado en la seccion de Orden',
        allowOutsideClick:false,
        allowEscapeKey:false,
        allowEnterKey:false,
        stopKeydpwnPropagation:false,
        inputValidator: (value) => {
          if (!value) {
            return 'Debe escoger un tamaño de Agua'
          }
         else{
              if(value=='aguachica')
              {
                window.location.href="assets/registroproductoget.php?p=53";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Agua 600 mililitros'})
              }
              if(value=='aguagrande')
              {
                window.location.href="assets/registroproductoget.php?p=54";
                //return Swal.fire({ title:'Compra Hecha',text:'Su compra se ha agregado a su pedido',icon:'success',html: 'Ha seleccionado Agua 1 Litro' })
              }
              return ''
          }
        }
        
      })
  
  });

/**DEMO 1 */
$('.mi_checkbox').change(function() {
    //Verifico el estado del checkbox, si esta seleccionado sera igual a 1 de lo contrario sera igual a 0
    var estatus = $(this).prop('checked') == true ? 1 : 0; 
    //var estatus = $(this).prop('checked') == true ? 'Activo' : 'Inactivo';
    var valorSelect = $(this).val(); //Capturo el valor del Checkbox  seleccionado
    console.log(estatus);
    
    //Recorrer toda la lista de los checkbox seleccionados
    var selected = '';    
        $('input[type=checkbox]').each(function(){
            if (this.checked) {
               dias =  selected += $(this).val()+', ';
            }
        }); 

    $('#respDias').html(dias); 
    //$('#respDias').html(valorSelect); 

   /* $.ajax({
        type: "GET",
        dataType: "json",
        url: '/StatusNoticia',
        data: {'estatus': estatus, 'id': id},
        success: function(data){
            $('#resp' + id).html(data.var); 
            console.log(data.var)
        }
    });
    */
});


/***DEMOS */

//Verificando si el checkbox esta seleccionado
$('input[type="checkbox"]').change(function(E) {
    //[name="avatar"] o [id="avatar"]
      if (this.checked) {
          var estado = 'Encendido'; 
          console.log('Checkbox', estado);
          console.log("Valor del Checkbox: " +  $(this).val());
      } else {
          var estado = 'Apagado'; 
          console.log('Checkbox', estado);
      }
      $('#respPersonas').html(estado); 
  });


// VERIICANDO ESTADO DEL CHECKBOX CON .prop(), 
//simplemente  comprobamos el valor de la propiedad checked (true o false ).
$('input[type="checkbox"]').click(function(){
    if($(this).prop("checked") == true){
        console.log("Estoy Seleccionado", $(this).val());
    }
    else if($(this).prop("checked") == false){
        console.log("No estoy Seleccionado");
    }
});

  
// VERIICANDO ESTADO DEL CHECKBOX CON LA FUNCION .is(), comprobamos si el elemento seleccionado,
// tiene el atributo checked y vemos su valor TRUE O FALSE
$('input[id="avatar"]').click(function(){
    if($(this).is(":checked")){
        console.log("Checkbox Activo,", $(this).val() );
    }
    else if($(this).is(":not(:checked)")){
        console.log("Checkbox Inactivo,", $(this).val());
    }
});

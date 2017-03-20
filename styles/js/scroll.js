$(document).ready(
function(){
  $('a[href^="#"]').on('click',function(e){
e.preventDefault();
var target = this.hash;
var $target = $(target);
$('html,body').animate({
  'scrollTop':($target.offset().top)-100
},1000,'swing');
  });
});


$(document).ready(
	function(){
		$(".dropdown-menu").mouseleave(function(){
      $(".dropdown").removeClass("open");
    });
	});


function validar(){
var telefono,correo,expresion;

expresion = /\w+@\w+\.+[a-z]/;

telefono = document.getElementById("telefono").value;
correo = document.getElementById("correo").value;
nombre = document.getElementById("nombre").value;
mensaje = document.getElementById("mensaje").value;

if(nombre == null || nombre.length == 0 || /^\s+$/.test(nombre)){
    swal(
  'Error!',
  'Debe escribir su nombre',
  'error'
)
return false;
  }else if(nombre.length>30){
    swal(
  'Error!',
  'Nombre demasiado largo',
  'error'
)
return false;
  }else if(!expresion.test(correo)){
    swal(
  'Error!',
  'El correo tiene un formato invalido',
  'error'
)
  return false;
}else if(isNaN(telefono)){
	  swal(
  'Error!',
  'Sólo se permiten numeros en el campo teléfono',
  'error'
)
	return false;
}else  if(telefono.length>10){
	swal(
  'Error!',
  'El número de teléfono supera el tamaño permitido',
  'error'
)
	return false;
}else if(telefono == null || telefono.length == 0 || /^\s+$/.test(telefono)){
    swal(
  'Error!',
  'El teléfono no puede estar vacio',
  'error'
)
  return false;

}else if( mensaje == null || mensaje.length == 0 || /^\s+$/.test(mensaje) ) {
  swal(
  'Error!',
  'El mensaje no puede estar vacio',
  'error'
)
  return false;
}

}



function getQueryVariable(variable) {
   var query = window.location.search.substring(1);
   var vars = query.split("&");
   for (var i=0; i < vars.length; i++) {
       var pair = vars[i].split("=");
       if(pair[0] == variable) {
           return pair[1];
       }
   }
   return false;
}


$(document).ready(
  function(){
   var query =  getQueryVariable('sent');
   if(query == 1){
    swal(
  'Enviado!',
  'El mensaje se envió con éxito',
  'success'
)  

  }else{
     swal({
  title: 'Bienvenido!',
  text: 'Gracias por visitar mi página.',
  timer: 4000
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      console.log('Este cuadro se cerrará automáticamente')
    }
  }
)
   }
  }
  );


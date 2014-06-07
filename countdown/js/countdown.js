// Javascript
$(function() {
	var fechaActual = new Date();
	   var fechaEvento = new Date(2014,9,4,8);
	   var diferenciaMilisegundos = Math.abs(fechaActual - fechaEvento);
	/*	  
	  var diferenciaSegundos = Math.round(diferenciaMilisegundos/1000);
	   var diferenciaMinutos = Math.round(diferenciaSegundos/60);
	   var diferenciaHoras = Math.round(diferenciaMinutos/60);
	   var diferenciaDias = Math.round(diferenciaHoras/24)
	*/
  var currentDate = new Date();
  $('.countdown').countdown( diferenciaMilisegundos + currentDate.valueOf(), function(event) {
    $this = $(this);
    switch(event.type) {
      case "seconds":
      case "minutes":
      case "hours":
      case "days":
      case "weeks":
      case "daysLeft":
        $this.find('div.'+event.type).html(event.value);
        break;
      case "finished":
        $this.fadeTo('slow', .5);
        break;
    }
  });
});

$(document).ready(function(){
	$("#submit").click(function(e) {
		e.preventDefault();

		if($("#nombre").val() != '' && $("#email").val() != '' && $("#mensaje").val() != ''){
			var nombreInput = $("#nombre").val(),
				telefonoInput = $("#telefono").val(),
				emailInput = $("#email").val(),
				mensajeInput = $("#mensaje").val();

			$("#loader-circle").addClass("loader-circle-show");
			$("#loader-circle").removeClass("loader-circle-hide");
			/*
			** - Agregar la propiedad "disabled" al button submit.
			** - Dentro de los métodos de ajax agregar un control de código de estado, para el tipo de notificación. 
			*/
			$.ajax({
				url: "ProcessForm.php",
	          	type: "POST",
	          	data: {
      				'nombre': nombreInput,
		            'telefono': telefonoInput,
		            'email': emailInput,
		            'mensaje': mensajeInput
	          	},

	          	success: function(data){
          			M.toast({html: data});
	          		$("#process-form")[0].reset();
	          		
	          	},
	          	error: function(data){
	          		M.toast({html: "No se ha podido establecer la comunicaci&oacuten.<br>Vuelva a intentarlo nuevamente!"});
	          	},
	          	complete: function(){
			        $("#loader-circle").addClass("loader-circle-hide");
	          		$("#loader-circle").removeClass("loader-circle-show");
		      	}
			});
		}else{
			M.toast({html: "Debe completar los&nbsp<strong>campos requeridos</strong>!"});
		}
	});
});

$(document).ready(function(){
	formSubmit()

})

function formSubmit(){

	$('#registro_form').submit(function(e){
		e.preventDefault()

		var nom = $('Nombre').val()
		var doc = $('Documento').val()
		var nac = $('Nacionalidad').val()
		var fn = $('F_nacimiento').val()
		var prov = $('procedencia').val()
		var des = $('destino').val()
		var res = $('dir_residencia').val()
		var city = $('ciudad_residencia').val()
		var tel = $('telefono').val()
		var mail = $('email').val()
		var gen = $('genero').val()

		var data = 'nom='+nom+'$doc='+doc+'&nac='+nac+'&fn='+fn+
		'&prov='+prov+'&des='+des+'&res='+res+'&city='+city+'&tel='+tel+
		'&mail='+mail+'&gen='+gen;

		$.ajax({
				type: 'POST',
				url: 'php/registro.php',
				data: data,
				success: function(resp){
					if (resp!="") {
						$('#resultados').html(resp);
					}
				}
			})
	})

}


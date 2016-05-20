$(function(){

	$('#search').focus();
	$('#search_form').submit(function(e){
		e.preventDefault();
	})

	$('#search').keyup(function(){
		var envio = $('#search').val();

		$('#resultados').html('<h2><img src="img/ajax-loader.gif" width="20" alt = "" /> Cargando</h2>')
			
			$.ajax({
				type: 'POST',
				url: 'php/buscador1.php',
				data: ('search='+envio),
				success: function(resp){
					if (resp!="") {
						$('#resultados').html(resp);
					}
				}
			})
	})
})
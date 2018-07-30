$('#nick').change( function(){
		$.post('ajax_validacion.nick.php',{
			nick:$('#nick').val(),

				beforeSend: function(){
						$('.validacion').html("Espere un momento por favor..");
				}
		
		}, function(respuesta){
				$('.validacion').html(respuesta);
			
		});
	});

	/*validacion de cotnraseña iguales*/
$('#btn_guardar').hide();
$('#pass2').change(function(event){
if ($('#pass1').val()==$('#pass2').val()) {
	swal('Bien hecho...', 'Las contraseñas si coincide','success');
	$('#btn_guardar').show();

} else {
	swal('Opps...', 'Las contraseñas no coincide','error');
	$('#btn_guardar').hide();
}
});
/* para que con enter no me envie el formulario */
$('.form').keypress(function(e){
	if (e.which==13) {
		return false;
	}
});
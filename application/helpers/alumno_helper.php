<script>
	
function validacion(){

	$nombres = document.getElementById('nombres').value;
	$apellidos = document.getElementById('apellidos').value;
	$sexo = document.getElementById('sexo').value;
	$curso = document.getElementById('curso').value;

	if ($nombres.length==0) {

		document.getElementById('nombres').style.boxShadow = 'inset 0 0 15px red';
		document.getElementById('nombres').placeholder = 'Este campo es obligatorio';

		return false;
	} else {

		document.getElementById('nombres').style.boxShadow = 'inset 0 0 15px green';
	}

	if ($apellidos.length==0) {

		document.getElementById('apellidos').style.boxShadow = 'inset 0 0 15px red';
		document.getElementById('apellidos').placeholder = 'Este campo es obligatorio';

		return false;
	} else {

		document.getElementById('apellidos').style.boxShadow = 'inset 0 0 15px green';
	}

	if ($sexo==0) {

		document.getElementById('sexo').style.boxShadow = 'inset 0 0 15px red';
		document.getElementById('sexo').placeholder = 'Este campo es obligatorio';

		return false;
	} else {

		document.getElementById('sexo').style.boxShadow = 'inset 0 0 15px green';
	}

	if ($curso==0) {

		document.getElementById('curso').style.boxShadow = 'inset 0 0 15px red';
		document.getElementById('curso').placeholder = 'Este campo es obligatorio';

		return false;
	} else {

		document.getElementById('curso').style.boxShadow = 'inset 0 0 15px green';
	}

	return true;
}



</script>
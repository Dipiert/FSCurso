<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Ejemplo 2: DOM y validación</title>
	<script type="text/javascript">
	function validar_claves() {
		var c1 = document.getElementById('clave1').value;
		var c2 = document.getElementById('clave2').value;
		if (c1 == "" || c2 == "") 
		{
			alert("Debe ingresar la contrase�a y repetirla");
			document.getElementById('clave1').focus();
			return false;
		}	 
		if (c1 != c2)
		{
			alert("Las contrase�as no coinciden");
			document.getElementById('clave1').focus();
			return false;
		}	
		if (c1.length < 6) 
		{
			alert("La contrase�a debe tener al menos 6 caracteres");
			document.getElementById('clave1').focus();
			return false;
		} 	
		if (document.getElementById('menor18').checked && document.getElementById('mayor18').checked){
			alert("Debe seleccionar solo una opcion");
			return false;		
		}
			else if (!(document.getElementById('menor18').checked || document.getElementById('mayor18').checked)){			
				alert("Debe seleccionar al menos una opcion");
				return false;		
		}	
		return true;
	}
	</script>
</head>
<body>
<h1>Registro de usuario</h1>
	<form action="noimporta" method="get" onSubmit="return validar_claves()">
		Ingrese su email: 
		<input type="text" name="email" /> <br />
		Ingrese su clave: 
		<input type="password" name="clave" id="clave1" /> <br />
		Repita su clave: 
		<input type="password" id="clave2" /> <br />
		Edad: <br/>
        Menor de 18 <input id="menor18" type="checkbox"> 
        Mayor de 18 <input id="mayor18" type="checkbox"> <br/><br/>
		<input type="submit" value="Registrar" />
	</form>
</body>
</html>
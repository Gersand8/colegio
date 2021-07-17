function validar() {
    var alta = document.alta;


var p1 = document.getElementById("contraseña").value;
var p2 = document.getElementById("contraseña2").value;
var espacios = false;
var cont = 0;

    if(alta.nombre.value==0)
		{
			alert("El campo Nombre esta vacio")
			alta.nombre.value="";
			alta.nombre.focus();
			return false;
		}
	if(alta.apaterno.value==0)
		{
			alert("El campo Apellido Paterno esta vacio")
			alta.apaterno.value="";
			alta.apaterno.focus();
			return false;
		}
	if(alta.amaterno.value==0)
		{
			alert("El campo Apellido Materno esta vacio")
			alta.amaterno.value="";
			alta.amaterno.focus();
			return false;
		}
	if(alta.telefono.value==0)
		{
			alert("El campo Telefono esta vacio")
			alta.telefono.value="";
			alta.telefono.focus();
			return false;
		}
	if(alta.usuario.value==0)
		{
			alert("El campo Usuario esta vacio")
			alta.usuario.value="";
			alta.usuario.focus();
			return false;
		}
	if(alta.contraseña.value==0)
		{
			alert("El campo Contraseña esta vacio")
			alta.contraseña.value="";
			alta.contraseña.focus();
			return false;
		}
	if(alta.email.value==0)
		{
			alert("El campo Telefono esta vacio")
			alta.email.value="";
			alta.email.focus();
			return false;
		}
	if(alta.foto.value==0)
		{
			alert("El campo Foto esta vacio")
			alta.foto.value="";
			alta.foto.focus();
			return false;
		}
	if(document.alta.tipo[0].checked==false && document.alta.tipo[1].checked==false && document.alta.tipo[2].checked==false)
   		{
   			alert('Falta seleccionar un tipo');
   			return false;
   		}
		return true






while (!espacios && (cont < p1.length)) {
  if (p1.charAt(cont) == " ")
    espacios = true;
  cont++;
}
   
if (espacios) {
  alert ("La contraseña no puede contener espacios en blanco");
  return false;
}

if (p1.length == 0 || p2.length == 0) {
  alert("Los campos de la password no pueden quedar vacios");
  return false;
}
if (p1 != p2) {
  alert("Las passwords deben de coincidir");
  return false;
} else {
  alert("Todo esta correcto");
  return true; 
}

}



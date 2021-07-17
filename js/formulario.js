//(funcion)()
{
    var formulario = document.getElementById('formulario'),
		nombre = formulario.nombre,
		apaterno = formulario.apaterno,
		amaterno = formulario.amaterno,
		telefono = formulario.telefono,
		usuario = formulario.usuario,
		contraseña = formulario.contraseña,
		email = formulario.email,
        foto = formulario.foto,
        tipo = formulario.tipo,
        error = document.getElementById('error ingrese bien los datos');

                  
    function validarNombre(e){
    if(nombre.value == '' || nombre == null){
        console.log('Completa el nombre');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un Nombre</li>';
        e.preventDefault();
    }else{
    error.style.display='none';
    }
}

function validarApaterno(e){
    if(apaterno.value == '' || apaterno == null){
        console.log('Ingresa tu apellido paterno');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa tu apellido paterno</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}

function validarAmaterno(e){
    if(amaterno.value == '' || amaterno == null){
        console.log('Ingresa tu apellido materno');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa tu apellido materno</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}

function validarTelefono(e){
    if(telefono.value == '' || telefono == null){
        console.log('Ingresa tu No. de telefono');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa tu numero de telefono</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}

function validarUsuario(e){
    if(usuario.value == '' || usuario == null){
        console.log('Ingresa tu usuario');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa tu usuario</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}

function validarcontraseña(e){
    if(psw.value == '' || contraseña == null){
        console.log('Ingresa tu contraseña');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa tu contraseña</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}

function validarEmail(e){
     if(email.value == '' || email == null){
        console.log('Completa el correo');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un Email</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}

function validarTipo(e){
    if(tipo.value == '' || tipo.value == null){
        console.log('Selecciona Un tipo');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Selecciona Un tipo</li>';
        e.preventDefault();
    }else{
    error.style.display='none';
}
}
function validarfoto(e){
    if(foto.value == '' || foto == null){
       console.log('Completa el correo');
       error.style.display = 'block';
       error.innerHTML = error.innerHTML + '<li>Ingresa Un Email</li>';
       e.preventDefault();
}else{
   error.style.display='none';
}
}


function validarForm(e){
   error.innerHTML = '';
   error.style.display = 'block';
   validarNombre(e);
   validarApaterno(e);
   validarAmaterno(e);
   validarTelefono(e);
   validarUsuario(e);
   validarcontraseña(e);
   validarEmail(e);
   validarTipo(e);
   validarfoto(e);
   
}


formulario.addEventListener('submit', validarForm);

}

function comprobarClave(){
    clave1 = document.f1.clave1.value
    clave2 = document.f1.clave2.value
    if (clave1 == clave2)
       alert("Las dos claves son iguales...\nRealizaríamos las acciones del caso positivo")
    else
       alert("Las dos claves son distintas...\nRealizaríamos las acciones del caso negativo")
} 










//}())
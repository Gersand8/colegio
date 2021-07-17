function validacion(){

    var Name = document.getElementById("nombre").value;
    var Ap = document.getElementById("apaterno").value;
    var Am = document.getElementById("amaterno").value;
    var Telefono = document.getElementById("telefono").value;
    var Usuario = document.getElementById("usuario").value;
    var Email = document.getElementById("correo").value;
    var Password1 = document.getElementById("contra").value;
   
    
    if(Name=="" || Ap=="" || Am=="" || Email=="" || Telefono=="" || Usuario=="" || Password1=="")
    {
        alert("Favor de completar todos los campos");
        return false;
    }
    else if(Name.length>20){
        alert("El campo nombre tiene un maximo de 20 caracteres");
        return false;
    }
    else if(Ap.length>50){
        alert("El campo apellido paterno tiene un maximo de 50 caracteres");
        return false;
    }
    else if(Am.length>50){
        alert("El campo apellido materno tiene un maximo de 50 caracteres");
        return false;
    }
    else if(Email.length>70){
        alert("El campo email tiene un maximo de 50 caracteres");
        return false;
    }
    else if(Telefono.length<10 && Telefono.length>10){
        alert("Numero telefonico invalido");
        return false;
    }
    else if(Usuario.length>25){
        alert("El campo usuario tiene un maximo de 25 caracteres");
        return false;
    }
    else if(Password1.length>15){
        alert("El campo contraseña tiene un maximo de 15 caracteres");
        return false;
    }
    else if(isNaN(Telefono)){
        alert("El campo telefono solo acepta numeros");
        return false;
    }
    else if(!isNaN(Name) && !isNaN(Ap) && !isNaN(Am)){ 
        alert("Su nombre o apellidos no se escriben con numeros");
        return false 
    }
    else if(Password1.length <= 7){
        alert("La contraseña debe tener almenos 8 caracteres");
        return false;
    }
     
}

function realizado(){
    alert("Los datos se guardaron correctamente")
}

function validarPass(contra){
    


    if(contra.length > 7){

        var espacios = false;
       
        for (var i = 0; i < contra.length; i++) {
            if (contra.charAt(i) == " "){
                espacios = true;
            }
            
        }
            
        if (espacios==true) {
            alert ("La contraseña no puede contener espacios en blanco");
            return false;
        }
 
              
         if (Password1 != Password2) {
        alert("Las passwords deben de coincidir");
         return false;
        } else {
        alert("Todo esta correcto");
        return true; 
        }
}
}


 function comprobarClave(){
    contraseña = document.f1.contraseña.value
    contraseña2 = document.f1.contraseña2.value
    if (contraseña == contraseña2)
       alert("Las dos claves son iguales...\nRealizaríamos las acciones del caso positivo")
    else
       alert("Las dos claves son distintas...\nRealizaríamos las acciones del caso negativo")
} 

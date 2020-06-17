var nombre = document.getElementById("nombre");
var apellido = document.getElementById("apellido");
var usuario = document.getElementById("nombre_usuario");
var email = document.getElementById("email");
var password = document.getElementById("password");
var rol = document.getElementById("rol");
var form = document.getElementById("formReg");
var expReg= /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]+$/;

//--------VALIDACION DEL LADO DEL CLIENTE REGISTRO----------------------
 
    
    form.addEventListener('submit', function(evt){

        if(nombre.value === "" || nombre.value === null){
            nombre.style.borderColor = "#FFBABA";
            evt.preventDefault();
        }else{
            nombre.style.borderColor = "#DCFFD9";
        }
    
        if(apellido.value === "" || apellido.value === null){
            apellido.style.borderColor = "#FFBABA";
            evt.preventDefault();
        }else{
            apellido.style.borderColor = "#DCFFD9";
        }
    
        if(usuario.value === "" || usuario.value === null){
            usuario.style.borderColor = "#FFBABA";
            evt.preventDefault();
        }else{
            usuario.style.borderColor = "#DCFFD9";
        }
    
        if(email.value === "" || email.value === null || !expReg.test(email.value)){
            email.style.borderColor = "#FFBABA";    
            evt.preventDefault();  
        }else{
            email.style.borderColor = "#DCFFD9";
        }

        if(password.value === "" || password.value === null){
            password.style.borderColor = "#FFBABA";
            evt.preventDefault();
        }else{
            password.style.borderColor = "#DCFFD9";
        }
        
    });

/*function enviarForm(){
      
    if(nombre.value === "" || nombre.value === null){
        nombre.style.borderColor = "#FFBABA";
    }else{
        nombre.style.borderColor = "#DCFFD9";
    }

    if(apellido.value === "" || apellido.value === null){
        apellido.style.borderColor = "#FFBABA";
    }else{
        apellido.style.borderColor = "#DCFFD9";
    }

    if(usuario.value === "" || usuario.value === null){
        usuario.style.borderColor = "#FFBABA";
    }else{
        usuario.style.borderColor = "#DCFFD9";
    }

    if(email.value === "" || email.value === null || !expReg.test(email.value)){
        email.style.borderColor = "#FFBABA";      
    }else{
        email.style.borderColor = "#DCFFD9";
    }
    if(password.value === "" || password.value === null){
        password.style.borderColor = "#FFBABA";
    }else{
        password.style.borderColor = "#DCFFD9";
    }
    return false;

}*/
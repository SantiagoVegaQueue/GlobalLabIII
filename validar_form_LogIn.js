
var usuario = document.getElementById("user_log");
var password = document.getElementById("password_log");

//--------VALIDACION DEL LADO DEL CLIENTE REGISTRO----------------------
    var form = document.getElementById("formLog");
    
    form.addEventListener('submit', function(evt){
        

        if(usuario.value === "" || usuario.value === null){
            usuario.style.borderColor = "#FFBABA";
            evt.preventDefault();
        }else{
            usuario.style.borderColor = "#DCFFD9";
        }

        if(password.value === "" || password.value === null){
            password.style.borderColor = "#FFBABA";
            evt.preventDefault();
        }else{
            password.style.borderColor = "#DCFFD9";
        }
        
    });

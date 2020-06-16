var nombre = document.getElementById("nombre");
var precio = document.getElementById("precio");
var descripcion = document.getElementById("descripcion");
var fotos = document.getElementById("fotos");

//--------VALIDACION DEL LADO DEL CLIENTE SUBA DE PRODUCTOS----------------------
    var form = document.getElementById("formUpload");
    
    form.addEventListener('submit', function(evt){
        

        if(nombre.value === "" || nombre.value === null){
            nombre.style.borderColor = "#FFBABA";
            evt.preventDefault();
        }else{
            nombre.style.borderColor = "#DCFFD9";
        }
    
        
        if(precio.value === "" || precio.value === null){
            precio.style.borderColor = "#FFBABA";
            //alert("Ingrese un precio");
            evt.preventDefault();
        }else{
            precio.style.borderColor = "#DCFFD9";
        }
        
        if(isNaN(precio.value)){
            precio.style.borderColor = "#FFBABA";
            alert("Ingrese un precio");
            evt.preventDefault();
        }



        if(descripcion.value === "" || descripcion.value === null){
            descripcion.style.borderColor = "#FFBABA";    
            evt.preventDefault();  
        }else{
            descripcion.style.borderColor = "#DCFFD9";
        }
        
        if(fotos.value === "" || fotos.value === null){
            fotos.style.borderColor = "#FFBABA";
            evt.preventDefault();
        }else{
            fotos.style.borderColor = "#DCFFD9";
        }
        
    });
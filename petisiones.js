function cargar(){
    $(document).ready(function(){
        $.ajax({
            url: 'datos.txt',
            type: 'POST',
            success: function(respuesta){
                document.getElementById("datos").innerHTML=respuesta;

            },
            error: function(){
                console.log("no fue posible cargar el archiva");
            }
        });
     });
}
let btCarga= document.getElementById("cargar");
btCarga.addEventListener("click",cargar); 
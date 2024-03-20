var colorCambiado = false;
var tamanoCambiado = false;

function cambiarColor() {
    document.body.classList.toggle("color-Azul");
    colorCambiado = !colorCambiado;
}

function cambiarTamano() {
    var imagen1 = document.getElementById("imagen1"); // en esta parte solo la primer imagen cambiara de tamaño :3
                                                    
  

    if (!tamanoCambiado) {

        var anchoActual = imagen1.clientWidth; // la imagen cambiara su tamaño de alto y ancho
        var altoActual = imagen1.clientHeight; 
        imagen1.style.width = (anchoActual - 8) + "px"; 
        imagen1.style.height = (altoActual - 8) + "px"; 
        tamanoCambiado = true;


    } else {         //esta parte del codigo hace la funcion de que la imagen vuelva a su tamaño normal
        imagen1.style.width = "";  
        imagen1.style.height = ""; 
        tamanoCambiado = false;
    }
}

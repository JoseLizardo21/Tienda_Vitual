let cajadatos;
function iniciar() {
    cajadatos = document.getElementById("cajadatos");
    let url = "procesar.php"
    let solicitud = new XMLHttpRequest();
    solicitud.addEventListener("load", mostrar);
    solicitud.open("POST", url, true);
    solicitud.send();
}
function mostrar(evento){
    let datos = evento.target;
    if(datos.status == 200){
        let respuesta = datos.responseText;
        cajadatos.innerHTML= respuesta;
    };
}
window.addEventListener("load", iniciar); 
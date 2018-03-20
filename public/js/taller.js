function init() {
    var inputFile = document.getElementsByName('file');
    inputFile[0].addEventListener('change', mostrarImagen, false);
}
function mostrarImagen(event) {
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function(event) {
        var img = document.getElementById('imag');
        img.src= event.target.result;
    }
    reader.readAsDataURL(file);
}

window.addEventListener('load', init, false);
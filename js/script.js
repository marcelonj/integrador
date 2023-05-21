var totalPagar = document.getElementById("Total");
let botonResumen = document.getElementById("Resumen");
let botonBorrar = document.getElementById("Borrar");
var cantidad = document.getElementById("Cantidad");
var categoria = document.getElementById("exampleDataList");
var nombre = document.getElementById("Nombre");
var apellido = document.getElementById("Apellido");
var correo = document.getElementById("Correo");

function calcularTotal() {
    var descuento;
    var error = false;
    switch (categoria.value) {
        case "General":
            descuento = 0;
            break;
        case "Estudiante":
            descuento = 0.8;
            break;
        case "Trainee":
                descuento = 0.5;
                break;
        case "Junior":
            descuento = 0.15;
            break;
        default:
            document.getElementById("errorCategoria").classList.remove("d-none");
            error = true;
    }
    if (cantidad.value == "") {
        document.getElementById("errorCantidad").classList.remove("d-none");
        error = true;
    }
    if (error) {
        totalPagar.innerHTML = "Ha ocurrido un error";
    }
    else {
    document.getElementById("errorCategoria").classList.add("d-none");
    document.getElementById("errorCantidad").classList.add("d-none");
    let total = cantidad.value * (200 - (200 * descuento));
    totalPagar.innerHTML = total;
    }
}

function borrarContenido() {
    nombre.value = "";
    apellido.value = "";
    correo.value = "";
    cantidad.value = "";
    categoria.value = "";
    document.getElementById("errorCategoria").classList.add("d-none");
    document.getElementById("errorCantidad").classList.add("d-none");
    totalPagar.innerHTML = "";
}

botonResumen.addEventListener("click", calcularTotal)
botonBorrar.addEventListener("click", borrarContenido)
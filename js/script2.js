var totalPagar = document.getElementById("Total");
let botonResumen = document.getElementById("Resumen");
let botonBorrar = document.getElementById("Borrar");
var cantidad = document.getElementById("Cantidad");
var categoria = document.getElementById("Lista");
var nombre = document.getElementById("Nombre");
var apellido = document.getElementById("Apellido");
var correo = document.getElementById("Correo");
var estudiante = document.getElementById("TarjetaEstudiante");
var trainee = document.getElementById("TarjetaTrainee");
var junior = document.getElementById("TarjetaJunior");

document.getElementById("Comprar").disabled = true;

function calcularTotal() {
    var descuento;
    var error = false;
    switch (categoria.value) {
        case "1":
            descuento = 0;
            break;
        case "2":
            descuento = 0.8;
            break;
        case "3":
            descuento = 0.5;
            break;
        case "4":
            descuento = 0.15;
            break;
        default:
            document.getElementById("errorCategoria").classList.remove("d-none");
            error = true;
    }
    if (cantidad.value == "" || cantidad.value <= 0) {
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
    categoria.value = "Categoria";
    document.getElementById("errorCategoria").classList.add("d-none");
    document.getElementById("errorCantidad").classList.add("d-none");
    estudiante.classList.remove("bg-info-subtle");
    trainee.classList.remove("bg-info-subtle");
    junior.classList.remove("bg-info-subtle");
    totalPagar.innerHTML = "";
}

function pintarTarjetas() {
    switch (categoria.value) {
        case "1":
            estudiante.classList.remove("bg-info-subtle");
            trainee.classList.remove("bg-info-subtle");
            junior.classList.remove("bg-info-subtle");
            break;
        case "2":
            estudiante.classList.add("bg-info-subtle");
            trainee.classList.remove("bg-info-subtle");
            junior.classList.remove("bg-info-subtle");
            break;
        case "3":
            trainee.classList.add("bg-info-subtle");
            estudiante.classList.remove("bg-info-subtle");
            junior.classList.remove("bg-info-subtle");
            break;
        case "4":
            junior.classList.add("bg-info-subtle");
            estudiante.classList.remove("bg-info-subtle");
            trainee.classList.remove("bg-info-subtle");
            break;
        default:
            estudiante.classList.remove("bg-info-subtle");
            trainee.classList.remove("bg-info-subtle");
            junior.classList.remove("bg-info-subtle");
    }
}


/* Listeners */
botonResumen.addEventListener("click", calcularTotal);
botonBorrar.addEventListener("click", borrarContenido);
estudiante.addEventListener("click", () => {
    categoria.value = 2;
    estudiante.classList.add("bg-info-subtle");
    trainee.classList.remove("bg-info-subtle");
    junior.classList.remove("bg-info-subtle");
})
trainee.addEventListener("click", () => {
    categoria.value = 3;
    trainee.classList.add("bg-info-subtle");
    estudiante.classList.remove("bg-info-subtle");
    junior.classList.remove("bg-info-subtle");
})
junior.addEventListener("click", () => {
    categoria.value = 4;
    junior.classList.add("bg-info-subtle");
    estudiante.classList.remove("bg-info-subtle");
    trainee.classList.remove("bg-info-subtle");
})
categoria.addEventListener("change", pintarTarjetas);

categoria.addEventListener("change", () => {
    if(categoria.value != "Categoria"){
        document.getElementById("Comprar").disabled = false;
    }
    else {
        document.getElementById("Comprar").disabled = true;
        document.getElementById("errorCategoria").classList.remove("d-none");
        error = true;
    }
})

botonResumen.addEventListener("clic", () => {
    alert("Alerta")
    addEventListener("submit")
    evento.preventDefault()
})
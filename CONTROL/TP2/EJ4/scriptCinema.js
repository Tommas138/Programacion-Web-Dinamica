(function () {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                    })
                }
    )()
//Hago una funcion para validar que en el anio solo contenga numeros
// Obtenemos todos los elementos con la clase "validar"
document.querySelectorAll(".validar").forEach(function(elemento) {
  // Añade un event listener para el evento keydown
  elemento.addEventListener("keydown", function(event) {
    // Definimos los códigos de tecla permitidos.
    const codigosPermitidos = [8, 9, 110, 190]; // Backspace, Tab, punto (teclado numérico), punto (teclado principal)

    // Verifica si la tecla es un número (tanto del teclado principal como del numérico)
    const esNumero = (event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105);

    // Si la tecla no es un número y no está en la lista de códigos permitidos
    if (!esNumero && !codigosPermitidos.includes(event.keyCode)) {
      // Previene la acción por defecto (es decir, que se escriba el carácter)
      event.preventDefault();
    }
  });
});


document.getElementById("cinemaForm").addEventListener("submit", function(event) { //addEventListener, lo ponemos cuando necesitamos que detecte un evento y le agregamos lo que queremos que pase
    //Obtenemos los datos que necesitamos mediante su id
    const anio = document.getElementById("anio_form").value.trim();
    const duracion = document.getElementById("duracion_form").value.trim();
    const errorDivAnio = document.getElementById("anioInvalido");
    const validoDivAnio = document.getElementById("anioValido");
    const errorDivDuracion = document.getElementById("duracionValido");
    const validoDivduracion = document.getElementById("duracionValido"); 
    let valido = true;

    //Escribo las validaciones
    if(anio.length > 4) {
        document.getElementById("anio_form").style.border = "solid 1px red";
        document.getElementById("anio_form").classList.add("is-invalid");
        errorDiv.textContent="Error, el campo debe tener como maximo 4 caracteres y solo acepta numeros";
    } else {
        validoDiv.textContent = "anio Valido";
    }

    if(duracion.length > 3) {
        document.getElementById("duracion_form").style.border = "solid 1px red";
        document.getElementById("duracion_form").classList.add("is-invalid");
        errorDiv.textContent="Error, la duracion debe tener como maximo 3 numeros";
    } else {
        validoDivduracion.textContent = "duracion valida";
    }

    //Prevenimos el envio del formulario en caso de que algo este mal
    if (!valido) {
        document.getElementById("anio_form").style.border = "solid 1px red";
        document.getElementById("duracion_form").style.border = "solid 1px red";
        event.preventDefault(); // evita que se envíe el formulario
        document.getElementById("anio_form").classList.add("is-invalid");
        document.getElementById("duracion_form").classList.add("is-invalid");
    } else {
        document.getElementById("anio_form").style.border = "solid 1px green";
        document.getElementById("anio_form").classList.remove("is-invalid");
        document.getElementById("duracion_form").style.border = "solid 1px green";
        document.getElementById("duracion_form").classList.remove("is-invalid");
    }
})

/**const form = document.getElementById("formPersona");
form.addEventListener("submit", function(event) {
    if (!validar()) {
        event.preventDefault(); 
        event.stopPropagation();
        alert("Por favor, corrige los errores en el formulario.");
        form.classList.add('was-validated'); 
    }
});

function validar() {
    let esValido = true;

    const dni = document.getElementById("nroDni");
    const apellido = document.getElementById("apellido");
    const nombre = document.getElementById("nombre");
    const fechaNac = document.getElementById("fechaNac");
    const telefono = document.getElementById("telefono"); 
    
    const fechaReal = new Date(fechaNac)

    


    const dniRegex = /^\d{7,8}$/;
    if (!dniRegex.test(dni.value)) {
        dni.classList.add("highlight");
        esValido = false;
    } else {
        dni.classList.remove("highlight");
    }

    const nombreApellidoRegex = /^[a-zA-Z\s]+$/;

    if (!nombreApellidoRegex.test(apellido.value)) {
        apellido.classList.add("highlight");
        esValido = false;
    } else {
        apellido.classList.remove("highlight");
    }

    if (!nombreApellidoRegex.test(nombre.value)) {
        nombre.classList.add("highlight");
        esValido = false;
    } else {
        nombre.classList.remove("highlight");
    }
    
    if (!fechaNac.value) {
        fechaNac.classList.add("highlight");
        esValido = false;
    } else {
        fechaNac.classList.remove("highlight");
    }

    const telefonoRegex = /^[\d\s-]+$/;
    if (telefono.value && !telefonoRegex.test(telefono.value)) {
        telefono.classList.add("highlight");
        esValido = false;
    } else {
        telefono.classList.remove("highlight");
    }


    return esValido;
}
    */

const form = document.getElementById("formPersona");

function validar() {
    let esValido = true;

    const dni = document.getElementById("nroDni");
    const apellido = document.getElementById("apellido");
    const nombre = document.getElementById("nombre");
    const fechaNac = document.getElementById("fechaNac");
    const fechaNacInput = document.getElementById("fechaNacInput");
    const nombreInput = document.getElementById("nombreInput");
    const apellidoInput = document.getElementById("apellidoInput");
    const telInput = document.getElementById("telInput");
    const telefono = document.getElementById("telefono");
    const domicilio = document.getElementById("domicilio");
    
    const campos = [dni, apellido, nombre, fechaNac, telefono, domicilio];

    function aplicarEstilo(elemento, condicion) {
        if (condicion) {
            elemento.classList.add("highlight");
            esValido = false; 
        } else {
            elemento.classList.remove("highlight");
        }
    }

function aplicarMensaje(elemento, condicion) {
    let texto = document.getElementById("text-warning");
    console.log(elemento.id)
    
    if (condicion) { 
        if (!texto) { 
            texto = document.createElement("p");
            switch (elemento.id) {
                case "fechaNac":
                    texto.textContent = "Edad inválida";
                    break;
                case "telInput":
                    texto.textContent = "Telefono inválido";
                    break;
                case "domicilioInput":
                    texto.textContent = "Domicilio inválido";
                    break;
                case "apellidoInput":
                    texto.textContent = "Apellido inválido";
                    break;
                case "nombreInput":
                    texto.textContent = "Nombre inválido";
                    break;
                default:
                    break;
            }
            texto.id = "text-warning";
            texto.style.color = "red"; 
            elemento.appendChild(texto);
        }
    } else {
        if (texto) {
            texto.remove();
        }
    }
}

    const dniRegex = /^\d{7,8}$/;
    aplicarEstilo(dni, !dni.value || !dniRegex.test(dni.value));

    const nombreApellidoRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;
    const regexApellidoTest =  !nombreApellidoRegex.test(apellido.value)
    const regexNombreTest =  !nombreApellidoRegex.test(nombre.value)

    aplicarEstilo(apellido, !apellido.value || regexApellidoTest);
    aplicarMensaje(apellidoInput, regexNombreTest)
    aplicarEstilo(nombre, !nombre.value || regexNombreTest);
    aplicarMensaje(nombreInput, regexNombreTest)

    const fechaValor = fechaNac.value;
    
    if (!fechaValor) {
        aplicarEstilo(fechaNac, true); // Campo vacío
        
    } else {
        const fechaActual = new Date();
        const fechaNacimiento = new Date(fechaValor);
        const edadMinima = 18;
        
        const fechaLimite = new Date(fechaActual.getFullYear() - edadMinima, fechaActual.getMonth(), fechaActual.getDate());
        
        const esFechaInvalida = fechaNacimiento > fechaLimite; 
        
        aplicarEstilo(fechaNac, esFechaInvalida);
        aplicarMensaje(fechaNacInput, esFechaInvalida)
    }

    const telefonoRegex = /^[\d\s-]*$/; 
    
    aplicarEstilo(telefono, telefono.value && !telefonoRegex.test(telefono.value));


    
    return esValido;

}

form.addEventListener("submit", function(event) {
    if (!validar()) {
        event.preventDefault();
    }
    form.classList.add('was-validated'); 
});

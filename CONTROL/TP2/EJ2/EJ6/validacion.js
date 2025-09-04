document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("form");

    form.addEventListener("submit", (e) => {
        let errores = [];

        const nombre = form.Nombre.value.trim();
        const apellido = form.Apellido.value.trim();
        const edad = parseInt(form.Edad.value, 10);
        const direccion = form.Direccion.value.trim();
        const nivelEstudio = form.querySelector("input[name='NivelEstudio']:checked");
        const sexo = form.Sexo.value;
        const numeroDireccion = form.numeroDireccion.value.trim();

        function verificarInput(valor) {
            let esValido = true;
            const caracteresPermitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZáéíóúÁÉÍÓÚñÑ ";
            let i = 0;
            while (i < valor.length && esValido) {
                if (!caracteresPermitidos.includes(valor[i])) {
                    esValido = false;
                }
                i++;
            }
            return esValido;
        }

        if (nombre === "" || !verificarInput(nombre)) {
            errores.push("El nombre es obligatorio y solo puede contener letras.");
        }

        if (apellido === "" || !verificarInput(apellido)) {
            errores.push("El apellido es obligatorio y solo puede contener letras.");
        }

        if (isNaN(edad) || edad < 12 || edad > 120) {
            errores.push("La edad debe estar entre 12 y 120.");
        }

        if (!verificarInput(direccion)) {
            errores.push("La dirección solo puede contener letras y espacios.");
        }

        if (numeroDireccion === "" || isNaN(numeroDireccion) || parseInt(numeroDireccion, 10) <= 0) {
            errores.push("El número de dirección es obligatorio y debe ser un número positivo.");
        }

        if (!nivelEstudio) {
            errores.push("Debe seleccionar un nivel de estudio.");
        }

        if (sexo === "") {
            errores.push("Debe seleccionar un sexo.");
        }

        if (errores.length > 0) {
            e.preventDefault();
            let lista = "<h3>Errores encontrados:</h3><ul>";
            errores.forEach(err => {
                lista += `<li style="color:red">${err}</li>`;
            });
            lista += "</ul>";

            let contenedorErrores = document.getElementById("errores");
            if (!contenedorErrores) {
                contenedorErrores = document.createElement("div");
                contenedorErrores.id = "errores";
                form.parentNode.insertBefore(contenedorErrores, form);
            }
            contenedorErrores.innerHTML = lista;
        }
    });
});

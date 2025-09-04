
document.getElementById('form1').addEventListener('submit', function (e) {
  e.preventDefault(); //prevengo que el formulario se envie sin antes realizar la validaicion
  const titulo = document.getElementById('titulo').value; //obtencion de user
  const actores = document.getElementById('actores').value; //obtencion de password
  const director = document.getElementById('director').value;
  const guion = document.getElementById('guion').value;
  const produccion = document.getElementById('produccion').value;
  const anio = document.getElementById('anio').value;
  const nacionalidad = document.getElementById('nacionalidad').value;
  const genero = document.getElementById('genero');
  const duracion = document.getElementById('duracion').value;
  const restriccion = document.getElementsByName('radio');
  const validationTextarea = document.getElementById('validationTextarea').value;

  let valido = true;
  const form = this;

  // Limpiamos las clases de validación anteriores
  document.getElementById('titulo').classList.remove('is-invalid', 'is-valid');
  document.getElementById('actores').classList.remove('is-invalid', 'is-valid');
  document.getElementById('director').classList.remove('is-invalid', 'is-valid');
  document.getElementById('guion').classList.remove('is-invalid', 'is-valid');
  document.getElementById('produccion').classList.remove('is-invalid', 'is-valid');
  document.getElementById('anio').classList.remove('is-invalid', 'is-valid');
  document.getElementById('nacionalidad').classList.remove('is-invalid', 'is-valid');
  document.getElementById('genero').classList.remove('is-invalid', 'is-valid');
  document.getElementById('duracion').classList.remove('is-invalid', 'is-valid');
  document.getElementById('validationTextarea').classList.remove('is-invalid', 'is-valid');


  //analizo condiciones de usuario
  if (titulo.length < 3) {
    document.getElementById('titulo').classList.add('is-invalid');
    valido = false;
  } else {
    document.getElementById('titulo').classList.remove('is-invalid');
    document.getElementById('titulo').style.border = "solid 1px green";
  }

  if (actores.length < 3) {
    document.getElementById('actores').classList.add('is-invalid');
    valido = false;
  } else {
    document.getElementById('actores').classList.remove('is-invalid');
    document.getElementById('actores').style.border = "solid 1px green";
  }

  if (director.length < 3) {
    document.getElementById('director').classList.add('is-invalid');
    valido = false;
  } else {
    document.getElementById('director').classList.remove('is-invalid');
    document.getElementById('director').style.border = "solid 1px green";
  }

  if (guion.length < 3) {
    document.getElementById('guion').classList.add('is-invalid');
    valido = false;
  } else {
    document.getElementById('guion').classList.remove('is-invalid');
    document.getElementById('guion').style.border = "solid 1px green";
  }

  if (produccion.length < 4) {
    document.getElementById('produccion').classList.add('is-invalid');
    valido = false;
  } else {
    document.getElementById('produccion').classList.remove('is-invalid');
    document.getElementById('produccion').style.border = "solid 1px green";
  }

  if (anio.length > 4) {
    document.getElementById('anio').classList.add('is-invalid');
    valido = false;
  } else {
    document.getElementById('anio').classList.remove('is-invalid');
    document.getElementById('anio').style.border = "solid 1px green";
  }

  if (nacionalidad.length < 4) {
    document.getElementById('nacionalidad').classList.add('is-invalid');
    valido = false;
  } else {
    document.getElementById('nacionalidad').classList.remove('is-invalid');
    document.getElementById('nacionalidad').style.border = "solid 1px green";
  }

  if (genero.value.trim() === "") {
    document.getElementById('genero').classList.add('is-invalid');
    document.getElementById('genero').style.border = "solid 1px red";
    valido = false;
  } else {
    document.getElementById('genero').classList.remove('is-invalid');
    document.getElementById('genero').style.border = "solid 1px green";

  }

  if (duracion.length > 3 || duracion.length < 2) {
    document.getElementById('duracion').style.border = "solid 1px red";
    valido = false;
  } else {
        document.getElementById('duracion').style.border = "solid 1px green";

   
  }

  restriccion.forEach(radio => {
    radio.classList.remove("is-invalid", "is-valid");
  });
  let check = false;
  restriccion.forEach(radio => {
    if (radio.checked) {
      check = true;
    }
  })

  if (!check) {
    document.getElementById('restricciones').style.border = "solid 1px red";
    valido = false;
  } else {
    document.getElementById('restricciones').style.border = "solid 1px green";
  }
  if (validationTextarea.length < 20) {
    document.getElementById('validationTextarea').classList.add('is-invalid');
    valido = false;
  } else {
    document.getElementById('validationTextarea').classList.remove('is-invalid');
    document.getElementById('validationTextarea').style.border = "solid 1px green";
  }

  if (valido) {
    form.submit();
  } else {
    form.classList.add('was-validated');
  }
});
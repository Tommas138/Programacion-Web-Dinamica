// Example starter JavaScript for disabling form submissions if there are invalid fields

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
})()


document.getElementById('form1').addEventListener('submit', function(e) {
  e.preventDefault(); //prevengo que el formulario se envie sin antes realizar la validaicion
  const user = document.getElementById('usuario').value; //obtencion de user
  const pass = document.getElementById('password').value; //obtencion de password
  const passCont = document.getElementById('pass-cont'); //obtencion de contenedor de password
  const passError = document.getElementById('passwordError');
  let valido=true; 
  const form = this;

  // Limpiamos las clases de validación anteriores
  document.getElementById('usuario').classList.remove('is-invalid', 'is-valid');
  document.getElementById('password').classList.remove('is-invalid', 'is-valid');


  //analizo condiciones de usuario
  if (user.length < 3) {
    document.getElementById('usuario').classList.add('is-invalid');
    valido= false;
  } else {
    document.getElementById('usuario').classList.remove('is-invalid');
    document.getElementById('usuario').style.border= "solid 1px green";
  }

  //analizo condiciones de password
  if (pass.length < 8 ) {
    document.getElementById('password').classList.add('is-invalid');
    valido = false;
  } else if (pass === user) {
    document.getElementById('password').classList.add('is-invalid');
    passError.textContent = "La contraseña no puede ser igual que el nombre de usuario.";
    document.getElementById('password').style.border= "solid 1px red";
    valido = false;
  } else if (!/[A-Za-z]/.test(pass) || !/[0-9]/.test(pass)) {
    passError.textContent = "La contraseña debe contener numeros y letras.";
    document.getElementById('password').style.border= "solid 1px red";
    valido =false;
  } else {
    document.getElementById('password').classList.remove('is-invalid');
  }

  if (valido) {
    form.submit();
  } 
 });
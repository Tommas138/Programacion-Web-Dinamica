document.addEventListener("DOMContentLoaded", ()=>{
    //HACER VERIFICACION CON BOOTSTRAP O JQUERY
    let inputPatente = document.getElementById("inputPatente");
    let inputNroDni = document.getElementById("inputDni");

    let patente = inputPatente.value();
    let nroDni = inputNroDni.value()

    if(!patente.test(/[^a-zA-Z0-9]/)){
        
    }
});
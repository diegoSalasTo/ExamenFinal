"use strict";
document.addEventListener('DOMContentLoaded', function(){
    configurar();
})

function configurar() {
    const btnLogin = document.getElementById('botonIngreso');
    btnLogin.addEventListener('click', iniciarSesion);
}

async function iniciarSesion(){
    const txtUsuario = document.querySelector('#userInput');
    const txtPassword = document.querySelector('#claveInput');
    if(txtUsuario.value === '' || txtPassword.value === ''){
        swal({
        icon: 'error',
        title: 'Opa...',
        text: 'Rellenar los campos!',
        footer: '<a href="">Why do I have this issue?</a>'
      });
      return;
    }
    const datos = new FormData();
    datos.append("usuario", txtUsuario.value);
    datos.append("password", txtPassword.value);
    datos.append("accion", "login");
    const url = "data/login.php";
    const respuesta = await fetch(url, {
        method: 'POST',
        body: datos
    })
    const resultado = await respuesta.json();
    if(resultado.codigo === 200){
        window.location = "menu.php";
    } else {
        swal("Mal ahí", resultado.mensaje, "error");
    }
}
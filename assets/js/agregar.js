let boton = document.querySelector("#boton");
boton.addEventListener("click", (e) => {
  e.preventDefault();
  const TituloTxt = document.querySelector("#TituloTxt");
  const descripcion = document.querySelector("#DescripcionTxt");
  const formulario = document.querySelector("#formulario");
  const form = new FormData(formulario);
  if(TituloTxt.value === ''||descripcion.value === ''){
    swal({
    icon: 'error',
    title: 'Opa...',
    text: 'Rellenar los campos!',
    footer: '<a href="">Why do I have this issue?</a>'
  });
  return;
}
  const peticion = {
    method: "POST",
    body: form,
  };
  fetch("data/AñadirNuevo.php", peticion)
    .then((res) => res.json())
    .then((res) => {
      if (res["respuesta"]) {
        swal({icon:'success',text:res["mensaje"]});
        formulario.reset();
        window.location.href="menu.php";
      } else {
        alert(res["mensaje"]);
      }
    });
});

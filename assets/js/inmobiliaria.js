document.addEventListener('DOMContentLoaded', function(){
    iniciar();
})

function iniciar() {
    obtenerClientes();
}

async function obtenerClientes(){
    const url = "data/inmobiliaria.php?accion=listar";
    const respuesta = await fetch(url);
    const resultado = await respuesta.json();
    if(resultado.codigo === 200){
        const data = resultado.data;
        let html = "";
        data.forEach(departamentos => {
            html += "<tr>";
            html += "<td>" + departamentos.id + "</td>";
            html += "<td>" + departamentos.titulo + "</td>";
            html += "<td>" + departamentos.precio + "</td>";
            html += "<td>" + departamentos.descripcion + "</td>";
            html += "<td>" + departamentos.habitaciones + "</td>";
            html += "<td>" + departamentos.estacionamiento + "</td>";
            html += "</tr>";
        });
        const tabla = document.querySelector("#tblData");
        tabla.innerHTML = html
    }
}
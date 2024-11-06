const formularios_ajax = document.querySelectorAll(".FormularioAjax");

formularios_ajax.forEach(formularios=>{

function enviar_formulario_ajax(e){

  e.preventDefault();
  let enviar=  confirm("Quieres enviar el formulario");

if (enviar ==true){

    let data = new FormData(this);
    let method= this.getAttribute("method");
    let action= this.getAttribute("action");

    let encabezados = new Headers();

    let config={
        method:method,
        headers:encabezados,
        mode:'cors',
        cache:'no-cahe',
        body: data

    };
fetch(action,config)
.then(respuesta => respuesta.text())
.then(respuesta =>{alert(respuesta)
    });

}

}

formularios.addEventListener("submit",enviar_formulario_ajax);
});
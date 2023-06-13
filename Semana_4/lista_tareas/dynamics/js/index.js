window.addEventListener("load", ()=>{

    //=========== CONSTANTES ===========//
    const btnRegistrar = document.getElementById("btn-Registrar");
    const formAgregar = document.getElementById("registro");
    const mostrar = document.getElementById("contenedor-mostrar");

    //============= EVENTOS ============//

    btnRegistrar.addEventListener("click", (e) =>
    {
        e.preventDefault();
        datosForm = new FormData(formAgregar);
        Object.fromEntries(datosForm);
        console.log(Object.fromEntries(datosForm));
        let input = Object.fromEntries(datosForm);
        mostrar.style.display = "flex";
        mostrar.innerHTML += 
        `<div class="card">
            <h5 class="card-header">${input.Materia}</h5>
            <div class="card-body">
                <h6 class="card-title">${input.Tarea}</h6>
            </div>
         </div>
         <br>`;
                

        
        // });
    
    
    });







});
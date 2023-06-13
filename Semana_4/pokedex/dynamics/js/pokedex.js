window.addEventListener("load", ()=>{
    const btnAgregar = document.getElementById("btn-agregar");
    const divAgregar = document.getElementById("contenedor-agregar");
    const select = document.getElementById("select-tipos");
    const formAgregar = document.getElementById("form-nuevo");
    const btnEnviar = document.getElementById("btn-enviar");
    const buscador = document.getElementById("buscador");
    const resultados = document.getElementById("contenedor-resultados");
    const mostrar = document.getElementById("contenedor-mostrar");
    const editarForm = document.getElementById("editar");
    fetch("./dynamics/php/consultar.php")
    .then((respuesta)=>{
        return respuesta.json();
    }).then((datosJSON)=>{
        console.log(datosJSON);
        for(let tipo of datosJSON){
            select.innerHTML += `<option value = ${tipo.type_id}>${tipo.type_name}</option>`;
        }
    });
    btnAgregar.addEventListener("click", ()=>{
        divAgregar.style.display ="block";
    });
    btnEnviar.addEventListener("click", (e)=>{
        e.preventDefault();
        divAgregar.style.display ="none";
        datosForm = new FormData(formAgregar);

        fetch("./dynamics/php/insertar.php", {
            method: "POST",
            body: datosForm
        }).then((respuesta)=>{
            return respuesta.json();
        }).then ((datosJSON)=>{
            alert(datosJSON.mensaje);
          
        });
    });
    buscador.addEventListener("keyup", ()=>{
        let termino = buscador.value;  
        resultados.innerHTML = "";
        if(termino.length >= 3){
            fetch("./dynamics/php/buscador.php?termino="+termino)
            .then((respuesta)=>{
                return respuesta.json();
            }).then ((datosJSON)=>{
              
                for (resultado of datosJSON)
                {
                    resultados.innerHTML += `<div class="coincidencia" data-id="${resultado.pok_id}">${resultado.pok_name}</div>`;
                }   
                if(datosJSON.length == 0)
                {
                    resultados.innerHTML = "No hay resultados";
                }
            });
        }
        
    });
    resultados.addEventListener("click", (e)=>{
        if(e.target.classList.contains("coincidencia"))
        {
            let id_pokemon= e.target.dataset.id;
            resultados.innerHTML = "";
            mostrar.innerHTML = "";
            mostrar.style.display = "flex";
            divAgregar.style.display = "none";
            fetch ("./dynamics/php/pokemon.php?id="+id_pokemon)
            .then((respuesta)=>{
                return respuesta.json();
            }).then((datosJSON)=>{
                let titulo = ["Nombre", "Altura", "Peso", "Tipo", "Experiencia"];
                let datos=[datosJSON.pok_name, datosJSON.pok_height, datosJSON.pok_weight, datosJSON.type_name, datosJSON.pok_base_experience];
                i=0;
                for (dato of datos){
                    mostrar.innerHTML += `
                    <div class="dato">
                        <h1>${titulo[i]}</h1>
                        <p>${dato}</p>
                    </div>   
                    `;
                    i++;
                }
                mostrar.innerHTML += `
                <button data-id="${datosJSON.pok_id}" id="btn-eliminar" class=" botones">
                    <h1>Eliminar</h1>
                </button> `;
                mostrar.innerHTML += `
                <button data-id="${datosJSON.pok_id}" id="btn-editar" class="botones">
                    <h1>Editar</h1>
                </div>`;
                editarForm.children[0].children[1].value=datosJSON.pok_name;
                editarForm.children[1].children[1].value=datosJSON.pok_height;
                editarForm.children[2].children[1].value=datosJSON.pok_weight;
                editarForm.children[3].children[1].value=datosJSON.pok_base_experience;
                editarForm.children[4].children[1].value=datosJSON.type_id;
                const eliminar=document.getElementById("btn-eliminar");
                eliminar.addEventListener("click",(e)=>{
                    let id_pokemon= e.currentTarget.dataset.id;
                    fetch ("./dynamics/php/eliminar.php?id="+id_pokemon)
                    .then((respuesta)=>{
                        return respuesta.json();
                    }).then ((datosJSON)=>{
                        alert(datosJSON);
                    });
                mostrar.style.display = "none";
                });

                const editar=document.getElementById("btn-editar")
                editar.addEventListener("click", (e)=>{
                    console.log(editarForm);
                    mostrar.style.display="none";
                    editarForm.style.display="block";

                    let id_pokemon= e.currentTarget.dataset.id;
                    console.log(id_pokemon);
                });
                const actualizar= document.getElementById("btn-actualizar");
                actualizar.addEventListener("click",(e)=>{
                    e.preventDefault();
                    datosForm = new FormData(editarForm);
                    datosForm.append("id",id_pokemon);
                    fetch("./dynamics/php/editar.php",{
                        method:"POST",
                        body:datosForm
                    })
                    .then((respuesta)=>{
                         return respuesta.json();
                         
                    }).then ((datosJSON)=>{
                        alert(datosJSON.mensaje);
                        editarForm.style.display="none";
                    });


                });
            });
        }
    });
});

// // es el elemento que activó el evento
// console.log("e.target:");
// console.log(e.target);

// // es el elemento al que se adjunta el detector de eventos
// console.log("e.currentTarget:");
// console.log(e.currentTarget);
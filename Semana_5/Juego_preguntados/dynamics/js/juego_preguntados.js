window.addEventListener("load", ()=>{
    const query = document.getElementById("preguntas");
    const preguntas = document.getElementById("resultado-preguntas");

    query.addEventListener("click", (e)=>{
        e.preventDefault();
         fetch("./dynamics/php/preguntas.php")//la ruta es relativa al html, no al js
         .then((respuesta)=>{
             return respuesta.json();
         }).then((datosJSON)=>{
            //Despliega lo recibido en la promesa a través del inner.HTML
             preguntas.style.diplay="block";
             preguntas.innerHTML="";
             preguntas.innerHTML+= `
             <div class="header">
                <h2 id="materia">${datosJSON.materia}</h2>
                <h3 id="pregunta">${datosJSON.pregunta}</h3>
            </div>
                <br>
                    <div class="btn-res" id="a" value="${datosJSON.respuesta[0].boolCorrect}"> a) ${datosJSON.respuesta[0].valoresp}</div>
                    <div class="btn-res" id="b" value="${datosJSON.respuesta[1].boolCorrect}"> b) ${datosJSON.respuesta[1].valoresp}</div>
                    <div class="btn-res" id="c" value="${datosJSON.respuesta[2].boolCorrect}"> c) ${datosJSON.respuesta[2].valoresp}</div>
                    <div class="btn-res" id="d" value="${datosJSON.respuesta[3].boolCorrect}"> d) ${datosJSON.respuesta[3].valoresp}</div>
                    <br> 
                `;
            const opciona =  document.getElementById("a");
            const opcionb =  document.getElementById("b");
            const opcionc =  document.getElementById("c");
            const opciond =  document.getElementById("d");
            opciona.addEventListener("click",(e)=>{
                let value = opciona.getAttribute("value");
                if(value==1)
                    preguntas.innerHTML+= `<div id="statusc">Correcto :)</div><br> `;
                else
                    preguntas.innerHTML+= `<div id="statusi">Incorrecto :(</div><br> `;
                //preguntas.innerHTML="";
                
            });

            opcionb.addEventListener("click",(e)=>{
                let value = opcionb.getAttribute("value");
                if(value==1)
                    preguntas.innerHTML+= `<div id="statusc">Correcto :)</div><br> `;
                else
                    preguntas.innerHTML+= `<div id="statusi">Incorrecto :(</div><br> `;
                //preguntas.innerHTML="";
            });

            opcionc.addEventListener("click",(e)=>{
                let value = opcionc.getAttribute("value");
                if(value==1)
                    preguntas.innerHTML+= `<div id="statusc">Correcto :)</div><br> `;
                else
                    preguntas.innerHTML+= `<div id="statusi">Incorrecto :(</div><br> `;
                //preguntas.innerHTML="";
            });

            opciond.addEventListener("click",(e)=>{
                let value = opciond.getAttribute("value");
                if(value==1)
                    preguntas.innerHTML+= `<div id="statusc">Correcto :)</div><br> `;
                else
                    preguntas.innerHTML+= `<div id="statusi">Incorrecto :(</div><br> `;
                //preguntas.innerHTML="";
            });
         });
    });
});

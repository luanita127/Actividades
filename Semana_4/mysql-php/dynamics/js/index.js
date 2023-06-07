window.addEventListener("load",()=>
{
    
    const nota= document.getElementById("textaDescripcion");

    var guardado
    document.cookie="comegalleta = galletita; max-age=" +60*5; 

    nota.addEventListener("keyup",()=>
    {
        document.cookie= "comegalleta=" + nota.value + "; max-age=3600";

    })

})
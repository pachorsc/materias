document.addEventListener("DOMContentLoaded",()=>{

    let input = document.querySelector(".zona :first-child");
    let buscar = document.querySelector(".zona :nth-child(2)");
    let boton = document.querySelector("div.tareas button");
    let listaTareas = document.querySelector("div.listaTareas");
    let ul = crearElemeto("ul");

    buscar.addEventListener("input", (evt)=>{
        let lista = document.querySelectorAll(".listaTareas ul li");
        lista.forEach(li => {
            
            let text = li.innerText.substring(0, li.innerText.length - 1);
            if (!(text.includes(buscar.value))) {
                li.style.display = "none";
            } else {
                li.style.display = "block";
            }        
        });
        
    });

    function limpiar(element) {
        element.value="";
        element.focus();
    }
    function crearElemeto(element){
        return document.createElement(element)
    }
    function code(input){
        if (input.value.trim() != "") {
            let tarea = input.value.trim();
            let li = crearElemeto("li");
            let boton=crearElemeto("button")
            li.textContent =tarea;
            boton.textContent ="X";
            boton.addEventListener("click",()=> {
                li.remove();
            });
            ul.append(li);
            listaTareas.append(ul);
            li.append(boton)
            limpiar(input);
            li.addEventListener("click",()=>{li.classList.toggle("estilo")});
        }
    }
    
    boton.addEventListener("click",()=>{
        code(input);
    });
    input.addEventListener('keydown',(e)=>{
        if (e.key ==='Enter') {
            code(input);
        }
    })

})
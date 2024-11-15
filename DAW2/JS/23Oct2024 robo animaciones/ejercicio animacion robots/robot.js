document.addEventListener("DOMContentLoaded", ()=> {
    //declarar variables
    //barra superior del scroll
    const lineaScroll = document.createElement("div");
    //esto es para crear la barra de busqueda
    const barraB = document.createElement("div");
    const rowbarraB = document.createElement("div");
    const inp = document.createElement("input");
    //crea el primer contenedor
    const container = document.createElement("div");
    //le damos clase container
    container.setAttribute("class","container text-center ");
    //elemento row
    const row = document.createElement("div");
    row.setAttribute("class","row");    
    //los robots ahora
    

    //esto es para crear tarjetas de robots
    users.forEach(robotcito => {
        let robot = document.createElement("div");
        robot.setAttribute("class","col-md-4 datosi");
        robot.innerHTML = `                 
                <div class="card text-white bg-primary mb-3 ">
                    <div class="card-header">
                        <img src="${robotcito.image}" alt="">
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">${robotcito.firstName}</h4>
                      <div class="card-text">
                        <p>${robotcito.email}</p>
                        <p>${robotcito.phone}</p>
                      </div>
                    </div>
                </div>`;
        row.append(robot);
    });
    
    //bton para ir arriba
    const arribabtn = document.querySelector(".arriba");
    arribabtn.addEventListener("click", ()=>{
        console.log("first")
    });

    
    //creamos la barra de scroll




    //evento cambio de estilo
    const estilo = document.querySelector(".btn-primary");
    estilo.addEventListener("change",(evt)=> {
        console.log(evt.target.value)
        const referencia = document.querySelector("link").href=`
        https://bootswatch.com/5/${evt.target.value}/bootstrap.css`

    });

    //esto es para crear la barra de busqueda
    barraB.setAttribute("class","container");
    rowbarraB.setAttribute("class", "row my-5");
    inp.setAttribute("class", "form-control col-md-12");
    inp.setAttribute("type", "text");
    inp.setAttribute("placeholder", "Atributos");

    //añadimos barraB al row y despues el input
    rowbarraB.append(inp);
    barraB.append(rowbarraB);
    document.body.append(barraB); 
    //crear el evento de busqueda
    inp.addEventListener("input", (evt)=> {
        let escrit = inp.value;
        const rob = document.querySelectorAll(".datosi");
        
        rob.forEach( datosRob => {
            if (!(datosRob.textContent.toLocaleLowerCase().match(escrit))) {
                datosRob.style.display ="none";
            } else {
                datosRob.style.display = "block";
            }
        });


    });
   
    container.append(row);
    document.body.append(container);  
});
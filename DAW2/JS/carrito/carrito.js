const prd = document.querySelector("#list-prod");
let carrito = [];
const numCarr = document.querySelector("#cant");

document.addEventListener("DOMContentLoaded", ()=> {
  //hacer que funcione la barra de busqueda
  const inp = document.querySelector(".form-control");
  const btnBusc = document.querySelector(".d-flex button:nth-child(2)");
  btnBusc.addEventListener("click", (evt)=>{
    const tarj = document.querySelectorAll(".card");
    evt.defaultPrevented;
    let texto = inp.value.trim().toLocaleLowerCase();
    if (texto !== "") {
      
      tarj.forEach(card => {
        let nomPro = card.querySelector(".card-title");
        let nmProFIn =nomPro.textContent.toLocaleLowerCase();

        if (nmProFIn.includes(texto)) {
          card.style.display ="block";
        } else card.style.display ="none";;
      });
    } else {
      tarj.forEach(card => {
        card.style.display ="block";
      });
    }
    
  });



  //si ya existe el localstorage entonces hago que el carrito se llene
    if (!(localStorage.getItem("carrito") == null)) {
      carrito = JSON.parse(localStorage.getItem("carrito"));
      //se actualiza el carrito
      let catn = 0;
      carrito.forEach(element => {

        catn += element.cantidad;
      });

      numCarr.textContent = catn;
    }
    //crear cada tarjeta de los prductos
    products.forEach(element => {
      let nvProd = document.createElement("div");
      nvProd.setAttribute("class", "card");
      nvProd.innerHTML = `<img src="${element.thumbnail}" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title">${element.title}</h5>
      <p class="card-text">${element.description}</p>
      <p>${element.price}$</p>
      <button href="" class="btn btn-primary" onClick = "almacenar(this,${element.id})">Comprar</button>
      </div>`;
      prd.append(nvProd);
    });
  });


  //mostrar el carrito
  const carr = document.querySelector(".carritoHtm");
  const carrBtn = document.querySelector(".carrBtn");

  //al dar click muestra
  carrBtn.addEventListener("click", ()=>{
    carr.style.display="block";
      //crear carrito dinamicamente
    if (carrito.length != 0) {
      //eliminar el elemento anterior
      const antCarrito = document.querySelectorAll(".carritoHtm tr");
      for (let index = 1; index < antCarrito.length; index++) {
        antCarrito[index].remove();
      }

      //crear el carrito correcto
      const zonaAnadir = document.querySelector(".carritoHtm");
  carrito.forEach(proucto => {
    let prodTr = document.createElement("tr");
    prodTr.innerHTML = `
                    <td><img src="${proucto.img}" alt=""></td>
                    <td>${proucto.nombre}</td>
                    <td>${proucto.precio} X ${proucto.cantidad}</td>
                    <td class="equis" >X</td>
                  `;
    zonaAnadir.append(prodTr);
  });
  //precio total
  let totalPRec = document.createElement("tr");
  totalPRec.setAttribute("class","prec");
  let total = 0;
  carrito.forEach(element => {
    total += element.precio * element.cantidad;
  });
    totalPRec.innerHTML = `
                    <td></td>
                    <td></td>
                    <td>TOTAL : ${total}</td>
                    <td></td>
                  `;
    zonaAnadir.append(totalPRec);
    }

    //creamos el evento de eliminar tanto del carrito como del html del momento
    let equis = document.querySelectorAll(".equis");
    equis.forEach(equisBoton => {
      equisBoton.addEventListener("click",(evt)=>{
        let trPadre = evt.target.parentElement;
        //eliminar el elemento del objeto carrito[]
        //obtenemos la ruta de la imagen que es unica y la usamos para eliminar su objeto del array
        console.log(carrito);
        let imgdP = trPadre.querySelector("img").getAttribute("src");
        for (let index = 0; index < carrito.length; index++) {
          if (carrito[index].img ==imgdP) {
            carrito.splice(index,1);
            break;
          }
          
        }
        console.log(carrito);

        //quita el elemento html
        trPadre.remove();
        //actualizar el numero del carrito
        let catn = 0;
        carrito.forEach(element => {

          catn += element.cantidad;
        });
        numCarr.textContent = catn;

        //actyalizamos el localstoraeg
        localStorage.clear();
        //pasamos el objeto a string parap oder guardarlo
        let carritoObjaString = JSON.stringify(carrito);
        //se guarda
        localStorage.setItem("carrito",carritoObjaString);


        //actualizamos el precio
        const precio = carr.querySelector(".prec");
        const precFin = precio.querySelector("td:nth-child(3)");
        //suma del total precio
        let pr =0;
        carrito.forEach(elem => {
          pr += elem.precio 
        });
        precFin.textContent ="";
        frase = "TOTAL : "+ pr;
        precFin.textContent = frase;
        console.log(precio);

      });
    });

  });

  //al salir de la zona salir
  carr.addEventListener("mouseleave", ()=>{
    carr.style.display="none";
  });


  //funcionalidad de añadir carrito porque el onClick del boton lo necesita
function almacenar(elemento, idProd) {
  //comprobamos si el producto esta en el carrito
  const resultado = carrito.find((obj) => obj.id === idProd);
  if (resultado === undefined) {
    const padre = elemento.parentElement.parentElement;
    let imgP = padre.querySelector("img").getAttribute("src");
    let nm = padre.querySelector("h5").textContent;
    let pr = padre.querySelector(".card-body p:nth-child(3)").textContent;
    pr = pr.substring(0, pr.length - 1);
    let elementoActual = {
      id: idProd,
      img: imgP,
      nombre: nm,
      precio: pr,
      cantidad : 1
    };
    carrito.push(elementoActual);
  } else {
    resultado.cantidad++;
  }

  //actualizar el numero del carrito
  let catn = 0;
  carrito.forEach(element => {
    catn += element.cantidad;
  });
  numCarr.textContent = catn;
  
  //añadir al local storage del navegador
  //se limpia el carrito anterior
  localStorage.clear();

  //pasamos el objeto a string parap oder guardarlo
  let carritoObjaString = JSON.stringify(carrito);
  //se guarda
  localStorage.setItem("carrito",carritoObjaString);

  }
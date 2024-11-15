// alert("Hola soy JS");
document.write("Hola soy JS");
//VARIABLES
// var nombre="Redu"; //tradicional
// let edad=25; //moderna
// const SEXO="Masc"; 

// console.log("Esto se escribe en la consola");
// console.log(nombre);

// {
//     let nombre="Antonio";
//     console.log(nombre);
// }

// {
//     let nombre="Patatas";
//     console.log(nombre);
// }

// console.log(nombre);



//TIPOS DE VARIABLES
//PRIMITIVOS
    // let nombre="Juan";
    // let edad=30;
    // let soyMayor=true;
    // let algo;
    // let nada=null;

    // console.log(typeof nombre);
    // console.log(typeof edad);
    // console.log(typeof soyMayor);
    // console.log(typeof algo);
    // console.log(typeof nada);

//COMPUESTOS
//Arrays
    // let dias=["Lunes","Martes","Miercoles",4,true,null];
    // let tiempo=[];

    // console.log(typeof dias);
    // console.log(typeof dias[0]);

    // if(dias[6]==undefined){
    //     console.log("No está definido");
    // }else{
    //     console.log("Está definido");
    // }

//Object, parea almacenar varios objetos se crea un array de objetos
    let contactos={
        nombre:"Redu",
        edad:60,
        peso:70,
        andar:function(){
            return "8km";
        }
    }

    let agenda=[
        
    ]

    console.log(contactos.nombre);
    console.log(contactos.andar());//Se le pone paréntesis porque es una función


    //Funcion
    function saludar(){
        return "hola";
    }

    saludar();

    
    console.log(saludar());
    console.log(typeof saludar());
    console.log(typeof saludar);
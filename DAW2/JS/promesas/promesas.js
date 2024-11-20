let promesa = new Promise((resuelto, reject)=>{

    setTimeout(() => {
        resuelto("suoeeer");
    }, 4000);



});
    promesa
    .then(res=> console.log(res))
    .catch(err=> console.log(err));


let datos = [
    {
        id:1,
        nombre:"Pacho"
    },
    {
        id:2,
        nombre:"may"
    },
    {
        id:3,
        nombre:"Gauc"
    }
];
let leerDatos =new Promise((resolved, error)=>{
    setTimeout(() => {
        if (false) {
            resolved(datos);
        } else {
            error("no data found") ;
        }
    }, 2000);   

}) 
leerDatos
    .then(res => console.log(res))
    .catch(err => console.log(err));

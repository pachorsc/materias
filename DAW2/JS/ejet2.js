/* /* for (let index = 10; index > 0; index--) {
    console.log(`Hay ${index} botellas sobre la pared. Pero si se cae por mala suerte, entonces quedan ${index-1} botellas sobre la pared`)    
}

for (let index = 1; index < 7; index++) {
    document.write(`<h${index}>Tipos de encabezados: h${index}</h$>`);
}
for (let index = 5; index > 0; index--) {
    document.write(`<h${index}>Tipos de encabezados: h${index}</h$>`);
}
//ej5
let valor = prompt("ELige un numero");
document.write(`<br><select >`);
for (let index = 1; index <= valor; index++) {
    document.write(`<option value="${index}"> Opcion ${index}</option>`);
}

document.write(`</select>`);

//ej6

let datos = [ "Nombre", "Apellidos ", "Email"];
let estado = [ "Soltero", "Casado", "Divorciado"];
let hobby = [ "Deportes", "Cine", "Viajes"];

document.write(`<ul>`);
    datos.forEach(dato => document.write(`<li>${dato}</li>`));
document.write(`</ul>`);

document.write(`<br><select >`);
estado.forEach(est => document.write(`<option value="${est}">  ${est}</option>`) );

document.write(`</select>`);

document.write(`<table>`);
document.write(`<tr>`);

hobby.forEach(element => {
    document.write(`<td>${element} </td>`)
});

document.write(`</tr>`);

document.write(`</table><br>`);



document.write(`<table>`);
hobby.forEach(element => {
    document.write(`<tr><td>${element} </td></tr>`)
});
document.write(`</table>`);

//ej 7

let datos2 =  prompt("Nombre Apellidos Email").split(" ");
let estado2 = prompt("Soltero Casado Divorsiado").split(" ");
let hobby2 =  prompt("Deportes Cines Viajes").split(" ");

document.write(`<ul>`);
    datos2.forEach(dato => document.write(`<li>${dato}</li>`));
document.write(`</ul>`);

document.write(`<br><select >`);
estado2.forEach(est => document.write(`<option value="${est}">  ${est}</option>`) );

document.write(`</select>`);

document.write(`<table>`);
document.write(`<tr>`);

hobby2.forEach(element => {
    document.write(`<td>${element} </td>`)
});

document.write(`</tr>`);

document.write(`</table><br>`);



document.write(`<table>`);
hobby2.forEach(element => {
    document.write(`<tr><td>${element} </td></tr>`)
});
document.write(`</table>`);
 */
//ej8
/* let Lenguajes =  prompt("escribe los lenguajes que conoces separadas por una ,").split(",");
document.write(`<ol>`);
Lenguajes.forEach(ñeng => document.write(`<li>${ñeng}</li>`));
document.write(`</ol>`);

document.write(`<table><tr>`);
Lenguajes.forEach(ñeng => document.write(`<td>${ñeng}</td>`));
document.write(`</table></tr>`); */

//ej9

/* let filas = prompt("Cuantas filas");
let colum = prompt("Columnas");
document.write("<table>");
let cont =0;
for (let index = 0; index < filas; index++) {
    document.write("<tr>");
    for (let index2 = 0; index2 < colum; index2++) {
        cont++;
        document.write(`<td>${cont}</td>`);
        
    }
    document.write("/<tr>");
    
}
document.write("/<table>"); */

//ej 12
let coches = [
    {marca : "Ford" , motor: "Diesel", anio: 2019 },
    {marca : "Seat" , motor: "Gasolina", anio: 2017 },
    {marca : "Renault" , motor: "Diesel", anio: 2020 },
    {marca : "Renault" , motor: "Diesel", anio: 2022 },
    {marca : "Renault" , motor: "Gasolina", anio: 2021 }
    ];

    coches.filter(coche => coche.motor =="Diesel" && coche.marca =="Renault").forEach(co => console.log(co.marca)); 

//ej 13
/* function aEspacio(cadena) {
        cadena2 = "";
        for (let index = 0; index < cadena.length; index++) {
            if (cadena.charAt(index) === "a") {
                cadena2 += " ";
            } else {
                cadena2 += cadena.charAt(index);
            }
        }
        return cadena2;
}
        //cadena.replaceAll("a"," "); 

console.log(aEspacio(".asiaks.")); */

//ej 14 */
let usuarios = [
    {nombre : "Susana", apellido: "Lozano"},
    {nombre : "Antonio", apellido: "Sotillo"},
    {nombre : "Iván", apellido: "Merino"}
   ];

let usuarios2 = [];

usuarios.forEach(usu => usuarios2.push(usu.nombre+" "+usu.apellido) );

console.log(usuarios2)

/* EJERCICIO 1
Escribir un programa que calcule el índice de masa corporal redondeado a 2
decimales */
/* let masa = 70;
let altura = 171;

function indMasaCor (alt, peso) {
    return (peso/alt*alt).toFixed(2);
}
console.log(indMasaCor(altura,masa)); */

/* EJERCICIO 2
Escribir un programa que convierta una cantidad de días a horas, minutos y
segundos. Usar templates para mostrar todos los datos.  */
/* let cantDias = 3;

function diaH (dia) {

    return dia*24;
}
function diaM (dia) {

    return 60*diaH(dia);
}
function diaS (dia) {

    return dia*diaM(dia)*60;
}
document.write(`${cantDias} dias son: <br> ${diaH(cantDias)} Horas <br>${diaM(cantDias)} Minutos<br> ${diaS(cantDias)} Segundos`); */

/* EJERCICIO 3
Utilizando una estructura switch-case realizar un traductor sencillo de inglés a
español para las palabras cat, dog, yellow y sleep (podéis añadir más palabras
si queréis). Cualquier otra palabra no tienen traducción y se tiene que informar
al usuario. */

/* let cadenaing = prompt("Que palabra quieres traducir: 'cat', 'dog', 'yellow' o 'sleep'").toLowerCase();
trad(cadenaing);
function trad(cad) {
    switch (cad) {
        case "cat":
                document.write(`${cad} signiufica: gato`);
            break;

        case "dog":
                document.write(`${cad} signiufica: Perro`);
            break;
        case "yellow":
                document.write(`${cad} signiufica: Amarillo`);
            break;
        case "sleep":
                document.write(`${cad} signiufica: Dormir`);
            break;
    
        default:
            document.write("Esa palabra no existe en esste diccionario");
            break;
    }
} */

/* EJERCICIO 4
Escribir un programa que dado un string muestre el mismo, pero con los
caracteres ordenados alfabéticamente. Usa split, sort y join.  */

/**let cadena = "acBzg";
function ej4(params) {
    let nose = params.split("").sort( (a,b) => a.localeCompare(b)).join("");
    console.log(nose) 
}
ej4(cadena); */

/* EJERCICIO 5
Escribir un programa que dado un string muestre el mismo, pero con los
caracteres en orden inverso. Usa split, reverse y join */

/* let cadena2 = "acbzg";

let nose2 = cadena.toLocaleLowerCase().split("").sort().reverse().join("");
console.log(nose2); */

/* EJERCICIO 6
Escribir un programa que dada una cadena de caracteres muestre cada palabra
que contiene y su frecuencia de aparición. (suponemos que las palabras solo
están separadas por espacios)  */

/** let cadena = "hola soy german de venexuela de y tengo de hambre";

function separ(cad) {
   let sep = cad.split(" ");
   sep.forEach(element => {
        let rep =0;
        for (let index = 0; index < sep.length; index++) {
         if (sep[index]===element) {
            rep++;
            sep[index] ="";
           }            
        }
        if (element !=="") {
            console.log(`${element} ha salido un total de ${rep} veces`);
        }
        
   });
}
separ(cadena.toLowerCase());  */

/* EJERCICIO 7
Escribir un programa que partiendo del ejercicio anterior nos muestre solo la
palabra más repetida.  */

/**let cadena = "hola soy german de venexuela de tengo de hambre";
function separ(cad) {
   let sep = cad.split(" ");
   //guardo la palabra mas repetida
   let masrep = [sep[0], 1];
   sep.forEach(element => {
        let rep =0;
        for (let index = 0; index < sep.length; index++) {
         if (sep[index]===element) {
            rep++;
            sep[index] ="";
           }            
        }
        if (element !=="") {
            console.log(`${element} ha salido un total de ${rep} veces`);
            if (rep > masrep[1]) {
                masrep[0] = element;
                masrep[1] = rep;
            }
        }       
   });
   console.log("la palabra mas repetida es '"+masrep[0]+ "' "+masrep[1]);
}
separ(cadena);  */

/*EJERCICIO 8
Pedir al usuario que escriba una cadena de caracteres y devuelva un objeto con
cada palabra que contiene y su frecuencia de aparición.*/

/**let datosdados = prompt("hola soy german de venexuela de tengo de hambre");
function separ(cad) {
   let sep = cad.split(" ");
   let obj = {};
   //guardo la palabra mas repetida
   sep.forEach(element => {
        let rep =0;
        for (let index = 0; index < sep.length; index++) {
         if (sep[index]===element) {
            rep++;
            sep[index] ="";
           }            
        }
        if (element !=="") {
            obj[element] =rep;

        }       
   });
   console.log(obj);
   return obj;
   
}
separ(datosdados); */

/**EJERCICIO 9
Escribir un programa que almacene un objeto con las horas de clase de las
asignaturas de un curso, por ejemplo:
{'Matemáticas': 60, 'Física': 45, 'Química': 53} y después muestre la siguiente
información:
• Suma de las horas de todas las asignaturas.
• Nombre Asignatura con más horas.
• Un objeto con solo las asignaturas con menos horas (poned
vosotros el límite).*/

/**let materias = {
    'Matemáticas': 2, 
    'Física': 45, 
    'Química': 53,
    'Caminar':12,
    'Nadar':30,
    'dormir':1
};
function ej9(params) {
    let sum =0;
    let mayH= ["",0];
    for (const clave in params) {
        sum += params[clave];
        if (params[clave]>mayH[1]) {
            mayH[0] = clave;
            mayH[1] = params[clave];
        }
    }
    console.log("Total de Horas: "+sum);
    console.log("Nombre menos horas: "+mayH[0]);


    //pasamos el objeto a un array bidimensional
    let materiasArray = Object.entries(materias);

    // Ordenar el array por el valor (índice 1 de cada par)
    materiasArray.sort((a, b) => a[1] - b[1]);
    let menorH = materiasArray.slice(0, 3);

    // Si quieres volver a convertirlo en un objeto ordenado
    let materiasOrdenadas = Object.fromEntries(menorH);
    

    console.log(materiasOrdenadas);   
}
ej9(materias);  */

/** EJERCICIO 10 
Escribir un programa que, partiendo de una estructura de datos con los precios de las frutas de una tienda, permita realizar las siguientes acciones:*/

/**let frutas = [
    ["platano", 1.35],
    ["Manzana", 0.80],
    ["Pera", 0.85],
    ["Naranja", 0.70]
];
console.table(frutas);

function suibr10(arr) {
    arr.forEach(element => {
        element[1] *= 1.10;
        element[1] = element[1].toFixed(2);
    });
    console.table(frutas);
}
suibr10(frutas);
function cobrar(fruta, kilos) {
    let frut = frutas.find(x => x[0] ===fruta);
    console.log(frut[0]+" EL total será por "+kilos+" kilos seran "+(frut[1]*kilos).toFixed(2));
}
cobrar("Pera", 2);
function menorP(frut) {
    frut.sort((a,b) => a[1] - b[1]);
    console.log(frut[0][0]+" precio "+ frut[0][1] );
}
menorP(frutas); */

/**EJERCICIO 12
Crea un programa que pida al usuario que escriba una fecha en formato 
"dd/mm/yyyy y muestre el día, el mes y el año por separado. */

/**let diaUsu = prompt("27/09/2024");

//solo los numero separados

function mossepdia(params) {
    let sepDia = params.split('/');
    let resp ="";
sepDia.forEach(element => {
    resp += element+" ";
});
console.log(resp);
}
mossepdia(diaUsu);

//con metodo 
function met(params) {
    let sepDia = params.split('/');
    //se debe restar 1 al mes porque son indexados eso significa que enero es [0] por eso se debe restar 1
    //el formato de DATE es año, mes y fía
    let fecha = new Date(sepDia[2], sepDia[1]-1, sepDia[0]);

    //aqui formateamos la decha como queremos
    let opciones = { day: 'numeric', month: 'long', year: 'numeric' };
    console.log(fecha.toLocaleDateString('es-ES', opciones));
}
met(diaUsu); */
/**EJERCICIO 13
Escribe un programa que tome una oración y reemplace todas las letras "a" con 
"x", todas las letras "e" con "y" y todas las letras "i" con "z" */

/**let oracion = "hola buenos dias se";

function ej13(params) {
   let nOracion =  params.replaceAll('a', 'x').replaceAll('e','y').replaceAll('i','z');
    console.log(nOracion);
}
ej13(oracion);
 */
/**EJERCICIO 14
Crea un programa que tome una lista de nombres separados por comas y
muestre los nombres en orden alfabético. */

/**let cad14 =  "casa,aba,zorro,cosa,dedo";

function ej14(params) {
    let cad2 = params.split(",");
    cad2.sort();
    console.log(cad2);
}
ej14(cad14); */
/**EJERCICIO 15
Escribe un programa que tome una cadena de texto y elimine todas las vocales
(a, e, i, o, u) de la misma.*/

/**let cad15 = "tonotengoningunavocala.e.i.o.u.";
function ej15(cadena) {
    let canb=cadena.replaceAll('a','').replaceAll('e','').replaceAll('i','').replaceAll('o','').replaceAll('u','');
    console.log(canb);
}
ej15(cad15); */

/**EJERCICIO 16
Escribe una función que tome dos arreglos de números y devuelva un nuevo
arreglo que contenga los elementos que son comunes en ambos arreglos.*/

/**let arr1 = [1,2,7,3,4,5,6,7];
let arr2 = [6,7,7,8,9,10];

function ej16(ar1, ar2) {
    let arraux = [];
    ar1.forEach(element => {
        ar2.forEach(element2 => {
            if (element == element2) {
                if (!arraux.includes(element)) {
                    arraux.push(element);
                }     
            }
        });
    });

    console.log(arraux);
}
ej16(arr1,arr2); */
/**EJERCICIO 17
Tenemos el siguiente array:*/
/**let usuarios = [
{nombre : "Susana", apellido: "Lozano"},
{nombre : "Antonio", apellido: "Sotillo"},
{nombre : "Iván", apellido: "Merino"}
]; 
//Devolver un array uniendo los nombres y apellidos;
let aux=[];

for (const key in usuarios) {
    aux.push(usuarios[key].nombre+" "+usuarios[key].apellido);
}
console.log(aux); */
/**EJERCICIO 18
Crear un programa JavaScript donde se introduzca un número de kilómetros que
corre un Runner al día. Según los kilómetros recorridos a la semana se clasifica
a los Runners en las siguientes categorías usando los siguientes intervalos.
Suponemos que un Runner corre los 7 días de la semana los mismos kilómetros
al día. 
INTERVALO CATEGORIA
0<KILOMETROS<=10 Corredor novato
10<KILOMETROS<=30 Corredor iniciado
30<KILOMETROS<=40 Corredor experto
KILOMETROS>=50 Corredor nivel Élite
Se debe mostrar mediante document.write la categoría del Runner. Si el usuario
escribe un número negativo se debe mostrar un mensaje de error.*/
/**
 * function ej18() {
    let numKm;
do {
    numKm = prompt("Cunatos KM Corriste?");
} while (numKm<0);

numKm *= 7;
let res= "";
if (numKm<=10) {
    res = "Corredor novato";
} else if (numKm<=13) {
    res = "Corredor iniciado";
} else if (numKm<=40) {
    res = "Corredor experto";
} else if (numKm<=50) {
    res = "Corredor nivel Élite";
}else if (numKm>50) {
    res = "NIvel Dios";
}
document.write(res);
}
ej18(); 
 */

/**EJERCICIO 19
Crear un programa JavaScript donde se introduce el nombre de un animal a
través de un prompt.
Se mostrará dentro de un h1 la clase de animal a la que pertenece.
Los animales disponibles serán paloma, perro, serpiente y rana cuyas
respectivas clases son ave, mamífero, reptil y anfibio.
Si se introduce un animal que no está disponible se mostrará un mensaje de
error.
El programa admitirá que se escriba los animales con letras mayúsculas y
minúsculas. */
/**function ej19() {
    let anm;
    let resp="";
    do {
        anm = prompt("animales disponibles: paloma, perro, serpiente y rana").toLocaleLowerCase();
    } while (anm !="paloma" && anm !="perro" && anm !="serpiente" && anm !="rana");

    switch (anm) {
        case "paloma":
                resp += "ave";
            break;
            case "perro":
                resp += "mamífero";
            break;
            case "serpiente":
                resp += "reptil";
            break;
            case "rana":
                resp += "anfibio";
            break;
    
        default:
                resp += "Ni pta idea que pasó";
            break;
    }
    document.write(`<h1>${resp}</h1>`);
}
ej19();*/

/**EJERCICIO 20
El presupuesto de una obra se distribuye en los siguientes conceptos:
• 50% de materiales.
• 20% mano de obras.
• 30% en licencias de obra.
Crear un programa JavaScript que pida mediante un prompt el presupuesto total
de la obra y que muestre mediante document.write una lista ordenada del coste
de cada concepto. Si el usuario introduce un presupuesto negativo mostrar un
mensaje de error dentro de un h1. */

/**function ej20() {
    let pres = prompt("Escribe el presupuesto");
    let str= "";
    if (pres<=0) {
        document.write("<h1>Error</h1>");
    } else {
        document.write(`<ul>
                    <li>${pres*0.5} de materiale</li>
                    <li>${pres*0.2} de obras</li>
                    <li>${pres*0.3} de licencias de obras</li>

            </ul>`);
    } 
}
ej20(); */
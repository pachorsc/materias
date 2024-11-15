let prec = [2,6,8,0];

/*  map modifica los valores de un array y los devuelve */
/*  let precIva = prec.map(precio=>precio+precio*0.2);
console.log(precIva+" "+prec);  */

nombres = [
    {nom:'Juan', edad: 20},
    {nom:'ana', edad: 21},
    {nom:'JOJO', edad:10}
];
document.write('<ul>');
nombres.forEach(dato => {
    document.write(`<li> ${dato.nom} ${dato.edad}`);
    if (dato.edad>20) {
        document.write(` Está mayorcito`);
    }
    document.write(`</li>`);
});
document.write('</ul>');

//filter
document.write(`<h1>Filter</h1>`);
let nums = [1,2,3,4,5,6,7,8,9];

let filtrado = nums.filter((num) => num >4 );
document.write(filtrado);

nums.forEach((dato,indice) => console.log(indice));
/* let nums = [1,2,3,4,5,6,7,8,9];
nums.forEach((dato,indice) => console.log(indice));

nums.map(numero => numero*0.5).forEach(numerocamb => console.log(numerocamb));

 */
/* let coches = [

    {motor:"Diesel", nombre: "Renault"},
    {motor:"Gasolina", nombre: "Audi"},
    {motor:"Diesel", nombre: "Ford"}
]

let diesel = coches.filter(coch=> coch.motor =="Diesel");

diesel.forEach(coch => console.log(coch.nombre.toUpperCase()));

 */

let nums = [1,2,3];
//compara tambien el tipo real
/* if (nums.includes(6)) {
    console.log("si extá el numero 6")
} */
/* if (nums.some(num=> num>10)) {
    console.log("si hay numero mayor a 10")
}
if (nums.every(num=> num>=1)) {
    console.log("todos son mayor o igual a 1")
} */
//si mueves b-a por a-b se ordena de  mayor a menor
/* let ordenados = nums.sort((a,b) => b-a);

console.log(ordenados) */
console.log(nums.reduce((total,numero) => total + numero+10));
let datos;
// fetch('https://jsonplaceholder.typicode.com/todos/')
// .then(response => response.json())
// .then(json => {
//     json.forEach(element => {
//         console.log(element.id+" "+element.title)
//     });
// });


fetch('https://www.rtve.es/api/noticias.json')
.then(response => response.json())
.then(json => {
    json.forEach(element => {
        console.log(element.title +" "+element.image)
    });
});



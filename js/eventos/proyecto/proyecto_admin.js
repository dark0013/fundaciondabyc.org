let url = 'http://localhost/ApiFundacionDabyc/controllers/proyectos?page'

fetch(url)
  .then(response => response.json())
  .then(data => mostrarDatos(data))
  .catch(error => console.log(error))

const mostrarDatos = (data) => {
  console.log(JSON.stringify(data))
  
  // Recorrer los objetos JSON y obtener los campos necesarios
  data.forEach((objeto) => {
    const title = objeto.title;
    const imagen = objeto.imagen;
    const date_creation = objeto.date_creation;
    const description = objeto.description;
    
    // Mostrar los valores en la página web
    const cardHtml = document.createElement('div');
    cardHtml.className = 'card';

    const imagenHtml = document.createElement('img');
    imagenHtml.src = imagen;

    const cardBodyHtml = document.createElement('div');
    cardBodyHtml.className = 'card-body';

    const titleHtml = document.createElement('label');
    titleHtml.innerHTML = title;
    titleHtml.className = 'card-title';

    const date_creationHtml = document.createElement('h6');
    date_creationHtml.innerHTML = date_creation;
    date_creationHtml.className = 'card-subtitle mb-2 text-muted';

    const descriptionHtml = document.createElement('textarea');
    descriptionHtml.innerHTML = description;
    descriptionHtml.className = 'card-text';

    cardBodyHtml.appendChild(titleHtml);
    cardBodyHtml.appendChild(date_creationHtml);
    cardBodyHtml.appendChild(descriptionHtml);

    cardHtml.appendChild(imagenHtml);
    cardHtml.appendChild(cardBodyHtml);

    document.getElementById('card').appendChild(cardHtml);
    
  });
}


/*
let url = 'http://localhost/ApiFundacionDabyc/controllers/proyectos?page'

fetch(url)
  .then(response => response.json())
  .then(data => mostrarData(data))
  .catch(error => console.log(error))

const mostrarData = (data) => {
  console.log(JSON.stringify(data))
  
  // Obtener los valores de los campos del objeto JSON
  const title = data.title;
  const imagen = data.imagen;
  const date_creation = data.date_creation;
  const description = data.description;
  
  // Mostrar los valores en la página web
  document.getElementById('text_titulo').innerHTML = title;
  document.getElementById('text_imagen').src = imagen;
  document.getElementById('text_fecha').innerHTML = date_creation;
  document.getElementById('text_area').innerHTML = description;
}
*/






/*
let url = 'http://localhost/ApiFundacionDabyc/controllers/proyectos?page'
let im1 = 'https://www.adslzone.net/app/uploads-adslzone.net/2019/04/borrar-fondo-imagen.jpg'
fetch(url)
    .then(response => response.json())
    .then(data => mostrarData(data))
    .catch(error => console.log(error))

    const mostrarData = (data) => {
        console.log(JSON.stringify(data))
        document.getElementById('text_titulo').innerHTML='hola jesus';
        document.getElementById('text_imagen').src = im1;
        document.getElementById('text_fecha').innerHTML = '2023-12-12';
        document.getElementById('text_area').innerHTML = 'hola ad';
        }
*/

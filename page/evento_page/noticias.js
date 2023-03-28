//let url = 'https://fundaciondabyc.org/ApiFundacionDabyc/controllers/proyectos?page'
let url = `${window.location.origin}/ApiFundacionDabyc/controllers/proyectos?page`;
fetch(url)
  .then(response => response.json())
  .then(data => mostrarDatos(data))
  .catch(error => console.log(error))

const mostrarDatos = (data) => {
  console.log(JSON.stringify(data))
  
  // Recorrer los objetos JSON y obtener los campos necesarios
  data.forEach((objeto) => {
    const title = objeto.title;
    const imagen = objeto.url_image;
    const date_creation = objeto.date_proyect;
    const description = objeto.description;
    
    // Mostrar los valores en la página web
    const cardHtml = document.createElement('div');
    cardHtml.className = 'card';

    const imagenHtml = document.createElement('img');
    imagenHtml.src = imagen;
    imagenHtml.className = 'card-image';

    const cardBodyHtml = document.createElement('div');
    cardBodyHtml.className = 'card-body';

    const titleHtml = document.createElement('h4');
    titleHtml.innerHTML = title;
    titleHtml.className = 'card-title';

    const date_creationHtml = document.createElement('h6');
    date_creationHtml.innerHTML = date_creation;
    date_creationHtml.className = 'card-subtitle';

    const descriptionHtml = document.createElement('textarea');
    descriptionHtml.innerHTML = description;
    descriptionHtml.className = 'card-text';
    descriptionHtml.setAttribute('readonly', true); // Agregar el atributo readonly

    cardBodyHtml.appendChild(titleHtml);
    cardBodyHtml.appendChild(date_creationHtml);
    cardBodyHtml.appendChild(descriptionHtml);

    cardHtml.appendChild(imagenHtml);
    cardHtml.appendChild(cardBodyHtml);

    document.getElementById('card').appendChild(cardHtml);
    
  });
}


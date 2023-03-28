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
    const video_link = objeto.video_link;

    // Mostrar los valores en la página web
    const cardHtml = document.createElement('div');
    cardHtml.className = 'card';

    const videoHtml = document.createElement('iframe');
    videoHtml.id = 'iframe';
    videoHtml.src = video_link;
    
   /* const imagenHtml = document.createElement('img');
    imagenHtml.src = imagen;*/

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

    cardHtml.appendChild(videoHtml);
    //cardHtml.appendChild(imagenHtml);
    cardHtml.appendChild(cardBodyHtml);

    document.getElementById('card').appendChild(cardHtml);
    
  });

  const reelUrl = "https://www.instagram.com/reel/CqTbJCUvQcI/";
  //const video_link = objeto.video_link;
  const iframe = document.getElementById("iframe");
  iframe.setAttribute("src", `${reelUrl}embed/`);

  // Añade un botón de inicio de sesión y un evento para redirigir al usuario a la página de inicio de sesión de Instagram
  const loginButton = document.createElement("button");
  loginButton.innerText = "Iniciar sesión en Instagram";
  loginButton.addEventListener("click", () => {
      window.open("https://www.instagram.com/accounts/login/", "_blank");
  });
  document.getElementById("card").appendChild(loginButton);

  // Comprueba si el usuario ha iniciado sesión en Instagram y actualiza el iframe
  setInterval(() => {
      if (document.cookie.includes("sessionid")) {
          iframe.setAttribute("src", `${reelUrl}embed/`);
          loginButton.style.display = "none";
      }
  }, 1000);
}


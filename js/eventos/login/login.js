const form = document.getElementById('login-form');
const errorMessage = document.getElementById('error-message');

form.addEventListener('submit', (event) => {
  event.preventDefault();
  const txt_nombre_user = event.target.elements.txt_contrasenia.value;
  const txt_contrasenia = event.target.elements.txt_contrasenia.value;
  
  // Aquí iría el código para verificar si las credenciales son válidas
  // por ejemplo, podemos hacer una llamada a una API o comprobar en una base de datos
  
  if (txt_nombre_user === 'admin' && txt_contrasenia === 'admin.pass') {
    window.location.href = 'Admin/admin_.php';
  } else {
    errorMessage.style.display = 'block';
  }
});
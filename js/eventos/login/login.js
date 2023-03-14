const btnLogin = document.getElementById('btn_Login');
const errorMessage = document.getElementById('error-message');

btnLogin.addEventListener('click', async (event) => {
  event.preventDefault();
  const txt_nombre_user = document.getElementById("txt_nombre_user").value;
  const txt_contrasenia = document.getElementById("txt_contrasenia").value;

  try {
    const response = await fetch('http://localhost/ApiFundacionDabyc/controllers/usuario?page');
    const data = await response.json();
    // Verificar si las credenciales son válidas
    const usuario = data.find(usuario => usuario.nombre_user === txt_nombre_user && usuario.contrasenia === txt_contrasenia);
    if (usuario) {
      window.location.href = 'page/Admin/admin_.php';
      alert('Acceso exitoso');
    } else {
      alert('Contraseña incorrecta');
    }
  } catch (error) {
    console.error(error);
  }
});
const btnLogin = document.getElementById('btn_Login');
const errorMessage = document.getElementById('error-message');

btnLogin.addEventListener('click', async (event) => {
  event.preventDefault();
  const txt_nombre_user = document.getElementById("txt_nombre_user").value;
  const txt_contrasenia = document.getElementById("txt_contrasenia").value;

  try {
    const response = await fetch(`${window.location.origin}/ApiFundacionDabyc/controllers/usuario?page`);
    if (response.ok) {
      const data = await response.json();
      const usuario = data.find(usuario => usuario.name_users === txt_nombre_user && usuario.pass === txt_contrasenia);
      if (usuario) {
        window.location.href = 'page/Admin/admin_.php';
        alert('Acceso exitoso');
      } else {
        alert('Contraseña incorrecta');
      }
    } else {
      console.error('Error en la respuesta del servidor:', response.status);
    }
  }  catch (error) {
    console.error(error);
  }
})

document.getElementById("exampleCheck1").onclick = function() {
  var passwordInput = document.getElementById("txt_contrasenia");
  if (passwordInput.type === "password") {
      passwordInput.type = "text";
  } else {
      passwordInput.type = "password";
  }
}


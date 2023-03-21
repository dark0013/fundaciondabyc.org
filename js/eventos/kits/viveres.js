document.getElementById("btn_enviar").addEventListener("click", async (e) => {
  e.preventDefault();

  const name = document.getElementById("txt_nombres").value;
  const dni = document.getElementById("txt_cedula").value;
  const cellPhone = document.getElementById("txt_celular").value;
  const email = document.getElementById("txt_email").value;

  const txt_tipo_donacion = document.getElementById("txt_tipo_donacion").value;
  const cmb_tipo_viveres = document.getElementsByName("cmb_tipo_viveres");
  const txt_cantidad = document.getElementsByName("txt_cantidad");

  let list_donacion = [];
  debugger
  for (let i = 0; i < cmb_tipo_viveres.length; i++) {
    list_donacion.push({ 'producto': cmb_tipo_viveres[i].value, 'cantidad': txt_cantidad[i].value });
  }

  console.log(list_donacion);
  let formulario = new FormData();

  formulario.append("name", name);
  formulario.append("dni", dni);
  formulario.append("email", email);
  formulario.append("cellPhone", cellPhone);

  formulario.append("type_products", JSON.stringify(txt_tipo_donacion));
  formulario.append("donaciones", JSON.stringify(list_donacion));

  console.log(JSON.parse(JSON.stringify(Object.fromEntries(formulario.entries()))));
  let data = await fetch('http://localhost/ApiFundacionDabyc/controllers/donaciones', {
    method: 'POST',
    headers: {
      'accept': 'application/json ',
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(Object.fromEntries(formulario.entries()))
  })
  console.log(data)

  if (data.status == 200) {
    alert('Exito al guardar, refresque pantalla o presione F5 para poder previsualizar los cambios');
    limpiarCampos();
    location.reload();
  }else{
    alert('Hubo un error al guardar');
  }

});
const limpiarCampos = _ => {
  document.getElementById("txt_nombres").value = " ";
  document.getElementById("txt_celular").value = " ";
  document.getElementById("txt_email").value = " ";
  document.getElementById("txt_tipo_donacion").value = " ";
  document.getElementById("txt_cedula").value = " ";
}
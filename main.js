// registerform

let users = [
  {
    email: "admin@admin",
    password: "admin",
  },
];

function register(event) {
  event.preventDefault();
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  const confirmPassword = document.getElementById("confirm-password").value;
  if (password != confirmPassword) {
    alert("Las contraseñas no coinciden");
    return;
  } else if (password === "" || confirmPassword === "") {
    alert("Necesitas llenar todos los campos");
    return;
  }
  users.push({
    email: email,
    password: password,
  });
  alert("Usuario registrado exitosamente");
  window.location.href = "login.html";
}

function login(event) {
  event.preventDefault();
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  const confirmPassword = document.getElementById("confirm-password").value;
  if (password != confirmPassword) {
    alert("Las contraseñas no coinciden");
    return;
  }
  if (password === "" || confirmPassword === "" || email == "") {
    alert("Necesitas llenar todos los campos");
    return;
  }
  const user = users.find(
    (user) => user.email === email && user.password === password
  );
  if (user) {
    alert("Inicio de sesión exitoso");
    window.location.href = "mercados.html";
  } else {
    console.log(users);
    alert("Usuario o contraseña incorrectos");
  }
}

/* Para ingresar el correo en el footer */

function footer(event) {
  if (event.key === "Enter") {
    event.preventDefault();
    const email = event.target.value;
    if (email !== "") {
      alert("Correo registrado exitosamente");
      event.target.value = "";
    }
  } else {
    console.log("hola");
  }
}

/* const saveData = (data) => {
  const jsonData = JSON.stringify(data);
  const filePath = path.join(user_data, `${data.email}.json`);
  fs.writeFile(filePath, jsonData, (err) => {
    if (err) {
      alert("Ha ocurrido un error");
      return;
    }
  });
};
*/

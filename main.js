// registerform

let users = [
  {
    email: "admin@admin",
    password: "admin",
  },
];

window.onclick = function (event) {
  const modal = document.getElementById("myModal");
  if (event.target == modal) {
    modal.style.display = "none";
    loginForm.style.display = "none"; // Ocultar formulario al cerrar modal
  }
};

function showLogin() {
  const modal = document.getElementById("myModal");
  const options = document.getElementById("optionsLogin");
  options.style.display = "flex";
  modal.style.display = "block";
}

function showRegister() {
  const modal = document.getElementById("myModal");
  const options = document.getElementById("optionsLogin");
  options.style.display = "none";
  modal.style.display = "block";
  const registerForm = document.getElementById("registerForm");
  registerForm.style.display = "flex";
}
function closeLogin() {
  const modal = document.getElementById("myModal");
  const loginForm = document.getElementById("loginForm");
  const options = document.getElementById("optionsLogin");
  const registerForm = document.getElementById("registerForm");
  registerForm.style.display = "none";
  modal.style.display = "none";
  loginForm.style.display = "none";
  options.style.display = "block"; // Restablecer la visibilidad de opciones
}
function showLoginForm() {
  const loginForm = document.getElementById("loginForm");
  const options = document.getElementById("optionsLogin");
  loginForm.style.display = "flex";
  options.style.display = "none";
}

function submit(event) {
  event.preventDefault();
  window.location.href = "soporte.php";
}

/* function register(event) {
  event.preventDefault();

  const email = document.getElementById("register-email").value.trim();
  const password = document.getElementById("register-password").value.trim();
  const confirmPassword = document.getElementById("register-confirm-password").value.trim();

  if (email === "" || password === "" || confirmPassword === "") {
    alert("Necesitas llenar todos los campos");
    return;
  }

  if (password !== confirmPassword) {
    alert("Las contraseñas no coinciden");
    return;
  }

  users.push({
    email: email,
    password: password,
  });

  alert("Usuario registrado exitosamente");
  window.location.href = "index.php";
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
} */

/* Inicio de Sesion con Google */
function decodeJwtResponse(token) {
  const base64Url = token.split(".")[1];
  const base64 = base64Url.replace(/-/g, "+").replace(/_/g, "/");
  const jsonPayload = decodeURIComponent(
    atob(base64)
      .split("")
      .map(function (c) {
        return "%" + ("00" + c.charCodeAt(0).toString(16)).slice(-2);
      })
      .join("")
  );

  return JSON.parse(jsonPayload);
}
/* OLD

function googleResponse(response) {
  closeLogin();
  console.log("Encoded JWT ID token: " + response.credential);
  const responsePayload = decodeJwtResponse(response.credential);
  console.log("ID: " + responsePayload.sub);
  console.log('Full Name: ' + responsePayload.name);
  console.log('Given Name: ' + responsePayload.given_name);
  console.log('Family Name: ' + responsePayload.family_name);
  console.log("Image URL: " + responsePayload.picture);
  console.log("Email: " + responsePayload.email);
  alert(`Inicio de sesión exitoso, bienvenido ${responsePayload.name}`);
  

}*/

function googleResponse(response) {
  closeLogin();
  console.log("Encoded JWT ID token: " + response.credential);
  const responsePayload = decodeJwtResponse(response.credential);
  console.log("ID: " + responsePayload.sub);
  console.log("Full Name: " + responsePayload.name);
  console.log("Given Name: " + responsePayload.given_name);
  console.log("Family Name: " + responsePayload.family_name);
  console.log("Image URL: " + responsePayload.picture);
  console.log("Email: " + responsePayload.email);
  alert(`Inicio de sesión exitoso, bienvenido ${responsePayload.name}`);

  // Enviar el token JWT al servidor PHP mediante AJAX
  const token = response.credential;
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "guardar_token.php");
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    if (xhr.status === 200) {
      console.log("Token enviado correctamente al servidor");
      // Redirigir o actualizar la página según sea necesario
      window.location.href = "index.php"; // Ejemplo de redirección
    } else {
      console.log("Error al enviar el token al servidor");
      // Manejar el error si es necesario
    }
  };
  xhr.send("token=" + encodeURIComponent(token));
}

/*
window.onload = function () {
  google.accounts.id.initialize({
    client_id: '794519880683-k71camhqd66mdr5bl2vt6qpq8s1u447l.apps.googleusercontent.com',
    callback: handleCredentialResponse
  });
  google.accounts.id.prompt();
};
*/

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

function triangulo(event) {
  event.preventDefault();
  const character = document.getElementById("character").value;
  const size = parseInt(document.getElementById("size").value);
  const triangleElement = document.getElementById("triangle");

  let triangle = "";
  for (let i = size; i > 0; i--) {
    triangle += character.repeat(i) + "\n";
  }

  triangleElement.textContent = triangle;
}

function signo(event) {
  event.preventDefault();
  const birthdate = new Date(document.getElementById("birthdate").value);
  const zodiacInfo = getZodiacInfo(birthdate);

  document.getElementById("zodiac-image").src = zodiacInfo.image;
  document.getElementById("zodiac-image").alt = zodiacInfo.sign;
  document.getElementById("zodiac-image").style.display = "block";
  document.getElementById("zodiac-description").textContent =
    zodiacInfo.description;
}

function getZodiacInfo(date) {
  const zodiacSigns = [
    {
      sign: "Capricornio",
      startDate: new Date(date.getFullYear(), 11, 22),
      endDate: new Date(date.getFullYear() + 1, 0, 19),
      image: "images/capricornio.png",
      description: "Capricornio es un signo de tierra, gobernado por Saturno.",
    },
    {
      sign: "Acuario",
      startDate: new Date(date.getFullYear(), 0, 20),
      endDate: new Date(date.getFullYear(), 1, 18),
      image: "images/acuario.png",
      description: "Acuario es un signo de aire, gobernado por Urano.",
    },
    {
      sign: "Piscis",
      startDate: new Date(date.getFullYear(), 1, 19),
      endDate: new Date(date.getFullYear(), 2, 20),
      image: "images/piscis.png",
      description: "Piscis es un signo de agua, gobernado por Neptuno.",
    },
    {
      sign: "Aries",
      startDate: new Date(date.getFullYear(), 2, 21),
      endDate: new Date(date.getFullYear(), 3, 19),
      image: "images/aries.png",
      description: "Aries es un signo de fuego, gobernado por Marte.",
    },
    {
      sign: "Tauro",
      startDate: new Date(date.getFullYear(), 3, 20),
      endDate: new Date(date.getFullYear(), 4, 20),
      image: "images/tauro.png",
      description: "Tauro es un signo de tierra, gobernado por Venus.",
    },
    {
      sign: "Géminis",
      startDate: new Date(date.getFullYear(), 4, 21),
      endDate: new Date(date.getFullYear(), 5, 20),
      image: "images/geminis.png",
      description: "Géminis es un signo de aire, gobernado por Mercurio.",
    },
    {
      sign: "Cáncer",
      startDate: new Date(date.getFullYear(), 5, 21),
      endDate: new Date(date.getFullYear(), 6, 22),
      image: "images/cancer.png",
      description: "Cáncer es un signo de agua, gobernado por la Luna.",
    },
    {
      sign: "Leo",
      startDate: new Date(date.getFullYear(), 6, 23),
      endDate: new Date(date.getFullYear(), 7, 22),
      image: "images/leo.png",
      description: "Leo es un signo de fuego, gobernado por el Sol.",
    },
    {
      sign: "Virgo",
      startDate: new Date(date.getFullYear(), 7, 23),
      endDate: new Date(date.getFullYear(), 8, 22),
      image: "images/virgo.png",
      description: "Virgo es un signo de tierra, gobernado por Mercurio.",
    },
    {
      sign: "Libra",
      startDate: new Date(date.getFullYear(), 8, 23),
      endDate: new Date(date.getFullYear(), 9, 22),
      image: "images/libra.png",
      description: "Libra es un signo de aire, gobernado por Venus.",
    },
    {
      sign: "Escorpio",
      startDate: new Date(date.getFullYear(), 9, 23),
      endDate: new Date(date.getFullYear(), 10, 21),
      image: "images/escorpio.png",
      description: "Escorpio es un signo de agua, gobernado por Plutón.",
    },
    {
      sign: "Sagitario",
      startDate: new Date(date.getFullYear(), 10, 22),
      endDate: new Date(date.getFullYear(), 11, 21),
      image: "images/sagitario.png",
      description: "Sagitario es un signo de fuego, gobernado por Júpiter.",
    },
  ];

  for (const zodiac of zodiacSigns) {
    if (
      (date >= zodiac.startDate && date <= zodiac.endDate) ||
      (zodiac.sign === "Capricornio" &&
        date.getMonth() === 0 &&
        date.getDate() <= 19)
    ) {
      return zodiac;
    }
  }
  return null;
}

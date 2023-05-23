import "toastify-js/src/toastify.css";

/*  fonction affichage mot de passe Login   */
let eyeandoff = document.querySelector(".bi");
const passwordField = document.querySelector("input[type=password]");

if (eyeandoff != undefined) {
  eyeandoff.addEventListener("click", () => {
    eyeandoff.classList.toggle("bi-eye");
    eyeandoff.classList.toggle("bi-eye-slash");

    if (passwordField.type == "text") {
      passwordField.type = "password";
    } else {
      passwordField.type = "text";
    }
  });
}

let number = document.getElementById("number");
let counter = 0;
setInterval(() => {
  if (counter == 75) {
    clearInterval();
  } else {
    counter += 1;
    number.innerHTML = counter + "%";
  }
}, 16);

// fonction toast
Toastify({
  text: "Intervention supprimer",
  duration: 3000,
  destination: "https://github.com/apvarun/toastify-js",
  newWindow: true,
  close: true,
  gravity: "top", // `top` or `bottom`
  position: "left", // `left`, `center` or `right`
  stopOnFocus: true, // Prevents dismissing of toast on hover
  style: {
    background: "linear-gradient(to right, #00b09b, #96c93d)",
  },
  onClick: function () {}, // Callback after click
}).showToast();

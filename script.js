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
}, 15);

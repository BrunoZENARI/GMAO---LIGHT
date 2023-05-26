/* Toasts */
function Toasts() {
  // Get the snackbar DIV
  let x = document.getElementById("snackbar");

  // Add the "show" class to DIV
  x.className = "show";

  // After 3 seconds, remove the show class from DIV
  setTimeout(function () {
    x.className = x.className.replace("show", "");
    setTimeout(function () {
      window.location.reload();
    }, 1000);
  }, 3000);
}

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

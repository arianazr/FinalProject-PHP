function validation(event) {
  event.preventDefault();
  let email = document.getElementById("email").value;
  let emailRegEx =
    /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

  let password = document.getElementById("password").value;
  let passwordRegEx = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;

  let emailInput = document.getElementById("email");
  let passwordInput = document.getElementById("password");

  let popUp = document.querySelector(".signIn__popup");
  if (!email.match(emailRegEx)) {
    emailInput.style.borderBottom = "2px solid #B00020";
    emailInput.classList.toggle("shake-animation");
    emailInput.style.color = "#B00020";
    return false;
  } else {
    emailInput.style.borderBottom = "2px solid #000";
    emailInput.style.color = "#000";
  }
  if (!password.match(passwordRegEx)) {
    passwordInput.style.borderBottom = "2px solid #B00020";
    passwordInput.classList.toggle("shake-animation");
    passwordInput.style.color = "#B00020";
    return false;
  } else {
    passwordInput.style.borderBottom = "2px solid #000";
    passwordInput.style.color = "#000";
  }
  event.target.reset();

  if (email.match(emailRegEx) && password.match(passwordRegEx)) {
    popUp.classList.add("signIn__popup--animated");
    popUp.style.opacity = "1";
  }

  popUp.addEventListener("animationend", function () {
    popUp.classList.remove("signIn__popup--animated");
  });
  return true;
}

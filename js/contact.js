function validation() {
  let email = document.getElementById("email").value;
  let emailRegEx =
    /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

  let password = document.getElementById("password").value;
  let passwordRegEx = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;

  if (!email.match(emailRegEx)) {
    document.getElementById("email").style.borderBottom = "2px solid red";
    document.getElementById("email").classList.toggle("shake-animation");
    return false;
  } else {
    document.getElementById("email").style.borderBottom = "2px solid #000";
  }
  if (!password.match(passwordRegEx)) {
    document.getElementById("password").style.borderBottom = "2px solid red";
    document.getElementById("password").classList.toggle("shake-animation");
    return false;
  } else {
    document.getElementById("password").style.borderBottom = "2px solid #000";
  }
  return true;
}

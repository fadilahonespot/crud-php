window.onload = function () {
  document.getElementById("pw1").onchange = validatePassword;
  document.getElementById("pw2").onchange = validatePassword;
};

function validatePassword() {
  var pass2 = document.getElementById("pw1").value;
  var pass1 = document.getElementById("pw2").value;
  if (pass1 != pass2)
    document
      .getElementById("pw2")
      .setCustomValidity("Sandi Tidak Sama, Coba Lagi");
  else document.getElementById("pw2").setCustomValidity("");
}

function showPassword() {
  var pass1 = document.getElementById("pw1");
  var pass2 = document.getElementById("pw2");
  var pass0 = document.getElementById("pw0");
  if (
    pass1.type === "password" ||
    pass2 === "password" ||
    pass0 === "password"
  ) {
    pass1.type = "text";
    pass2.type = "text";
    pass0.type = "text";
  } else {
    pass1.type = "password";
    pass2.type = "password";
    pass0.type = "password";
  }
}


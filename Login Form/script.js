function login() {
  var user = document.getElementById("username").value;
  var pass = document.getElementById("password").value;
  if (user == "admin" && pass == "123") {
    alert("Hello Admin");
  } else {
    alert("You are not allowed to enter!");
  }
}

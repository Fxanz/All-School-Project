function register() {
  var gmail = document.getElementById("gmail").value;
  var congmail = document.getElementById("Gmail-confirm").value;
  var user = document.getElementById("username").value;
  var pass = document.getElementById("password").value;
  console.log(!!gmail, !!congmail, !!user, !!pass);
  if (gmail && congmail && user && pass) {
    alert("Your account has been created");
  } else {
    alert("I think there's some error here..");
  }
}

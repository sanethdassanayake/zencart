function signIn() {
  var email = document.getElementById("email");
  var password = document.getElementById("password");
  var rmb = document.getElementById("rmb");

  var form = new FormData();
  form.append("email", email.value);
  form.append("password", password.value);
  form.append("rmb", rmb.checked);

  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if (req.readyState == 4 && req.status == 200) {
      resp = req.responseText;
      alert(resp);
    }
  };
  req.open("POST", "signin-process.php", true);
  req.send(form);
}

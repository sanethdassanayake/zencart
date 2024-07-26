// Sweet alert
function showAlert(title, text, icon) {
  return Swal.fire({
    title: title,
    text: text,
    icon: icon,
    color: "#111",
  });
}
// Sweet alert

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
      var resp = req.responseText;
      // alert(resp);

      if (resp == "success") {
        showAlert("Success", "Successfully!", "success");
      } else {
        showAlert("Error", resp, "error");
      }
    }
  };
  req.open("POST", "/zencart/scripts/signin-process.php", true);
  req.send(form);
}

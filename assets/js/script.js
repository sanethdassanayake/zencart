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
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var rmb = document.getElementById("rmb").checked;

  var form = new FormData();
  form.append("email", email);
  form.append("password", password);
  form.append("rmb", rmb);

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

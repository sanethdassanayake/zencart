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

      if (resp == "success") {
        // showAlert("Success", "Successfully!", "success");
        window.location.href = "index.php";
      } else {
        showAlert("Error", resp, "error");
      }
    }
  };
  req.open("POST", "/zencart/scripts/signin-process.php", true);
  req.send(form);
}

function signUp() {
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var email = document.getElementById("email");
  var country_code = document.getElementById("country_code");
  var mobile = document.getElementById("mobile");
  var password = document.getElementById("password");
  var repassword = document.getElementById("repassword");

  var form = new FormData();
  form.append("fname", fname.value);
  form.append("lname", lname.value);
  form.append("email", email.value);
  form.append("country_code", country_code.value);
  form.append("mobile", mobile.value);
  form.append("password", password.value);
  form.append("repassword", repassword.value);

  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if (req.readyState == 4 && req.status == 200) {
      resp = req.responseText;
      if (resp == "success") {
        window.location.href = "signin.php";
      } else {
        showAlert("Error", resp, "error");
      }
    }
  };
  req.open("POST", "/zencart/scripts/signup-process.php", true);
  req.send(form);
}

function bizRegister() {
  var bname = document.getElementById("bname");
  var country_code = document.getElementById("country_code");
  var mobile = document.getElementById("mobile");
  var email = document.getElementById("email");
  var address = document.getElementById("address");
  var country_id = document.getElementById("country_id");

  var form = new FormData();
  form.append("bname", bname.value);
  form.append("country_code", country_code.value);
  form.append("mobile", mobile.value);
  form.append("email", email.value);
  form.append("address", address.value);
  form.append("country_id", id.value);

  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if (req.readyState == 4 && req.status == 200) {
      resp = req.responseText;
      if (resp == "success") {
        showAlert("Success", "Success", "success");
      }else if(resp == "signin"){
        showAlert("Error", "It looks like you don’t have an account yet. Please sign up first.", "error");
      } else {
        showAlert("Error", resp, "error");
      }
    }
  };
  req.open("POST", "/zencart/scripts/create-biz-process.php", true);
  req.send(form);
}

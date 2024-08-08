// Sweet alert
function showAlert(title, text, icon) {
  Swal.fire({
    title: title,
    text: text,
    icon: icon,
    confirmButtonText: "OK",
  }).then((result) => {
    if (result.isConfirmed) {
      // Reload the page if the user clicked "OK"
      window.location.reload();
    }
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

function bizRegister(addressId) {
  var bname = document.getElementById("bname");
  var country_code = document.getElementById("country_code");
  var mobile = document.getElementById("mobile");
  var email = document.getElementById("email");

  var form = new FormData();
  form.append("bname", bname.value);
  form.append("country_code", country_code.value);
  form.append("mobile", mobile.value);
  form.append("email", email.value);
  form.append("address", addressId);

  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if (req.readyState == 4 && req.status == 200) {
      resp = req.responseText;

      if (resp == "success") {
        showAlert(
          "Success",
          "Business account has successfuly created",
          "success"
        );
      } else {
        showAlert("Error", resp, "error");
      }
    }
  };
  req.open("POST", "/zencart/scripts/create-biz-process.php", true);
  req.send(form);
}

const inputElement = document.getElementById("password");

function activeUpdate() {
  var btn = document.getElementById("updateBtn");
  if (btn.disabled) {
    btn.disabled = false;
  }
}

function userDetailsUpdate(id) {
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var password = document.getElementById("password");
  var mobile = document.getElementById("mobile");

  var form = new FormData();
  form.append("userId", id);
  form.append("fname", fname.value);
  form.append("lname", lname.value);
  form.append("password", password.value);
  form.append("mobile", mobile.value);

  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if (req.readyState == 4 && req.status == 200) {
      resp = req.responseText;
      if (resp == "success") {
        showAlert("Success", "Update successfuly!", "success");
      } else {
        showAlert("Error", resp, "error");
      }
    }
  };
  req.open("POST", "/zencart/scripts/user-details-update-process.php", true);
  req.send(form);
}

function changePassword(id) {
  var password = document.getElementById("password2");
  var repassword = document.getElementById("repassword2");

  var passwordField = document.getElementById("password");

  var form = new FormData();
  form.append("password", password.value);
  form.append("repassword", repassword.value);

  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if (req.readyState == 4 && req.status == 200) {
      resp = req.responseText;
      if (resp == "success") {
        passwordField.value = password.value;
        activeUpdate();
      } else {
        showAlert("Error", resp, "error");
      }
    }
  };
  req.open("POST", "/zencart/scripts/change-password-process.php", true);
  req.send(form);
}

function changeMobile(id) {
  var country_code = document.getElementById("country_code");
  var mobile = document.getElementById("mobile2");

  var mobileField = document.getElementById("mobile");

  var form = new FormData();
  form.append("country_code", country_code.value);
  form.append("mobile", mobile.value);

  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if (req.readyState == 4 && req.status == 200) {
      resp = req.responseText;
      if (resp == "empty") {
        showAlert(
          "Error",
          "Please provide your mobile number so we can reach you.",
          "error"
        );
      } else if (resp == "invalid") {
        showAlert(
          "Error",
          "The mobile number you entered seems to be invalid. Please try again.",
          "error"
        );
      } else {
        mobileField.value = resp;
        activeUpdate();
      }
    }
  };
  req.open("POST", "/zencart/scripts/change-mobile-process.php", true);
  req.send(form);
}

function saveProfileImg() {
  var img = document.getElementById("profileImg");

  var form = new FormData();
  form.append("img", img.files[0]);

  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if (req.readyState == 4 && req.status == 200) {
      resp = req.responseText;

      if (resp == "empty") {
        showAlert("Error", "Please select your profile image.", "error");
      } else {
        // document.getElementById("imageContainer").src = resp;
        window.location.reload();
      }
    }
  };
  req.open("POST", "/zencart/scripts/save-profile-img-process.php");
  req.send(form);
}

function addNewAddress() {
  var lineOne = document.getElementById("lineOne");
  var lineTwo = document.getElementById("lineTwo");
  var city = document.getElementById("city");
  var province = document.getElementById("province");
  var pcode = document.getElementById("pcode");
  var country = document.getElementById("country");

  var form = new FormData();
  form.append("lineOne", lineOne.value);
  form.append("lineTwo", lineTwo.value);
  form.append("city", city.value);
  form.append("province", province.value);
  form.append("pcode", pcode.value);
  form.append("country", country.value);

  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if (req.readyState == 4 && req.status == 200) {
      resp = req.responseText;
      // alert(resp);
      if (resp == "success") {
        showAlert(
          "Success",
          "Your address has been successfully added!",
          "success"
        );
      } else {
        showAlert("Error", resp, "error");
      }
    }
  };
  req.open("POST", "/zencart/scripts/add-new-address.php", true);
  req.send(form);
}

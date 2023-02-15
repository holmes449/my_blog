// Hàm check lỗi form Login
function check_login() {
  // Lấy giá trị
  let taikhoan = document.getElementById("js_taikhoan");
  let matkhau = document.getElementById("js_matkhau");
  let taikhoanVal = taikhoan.value;
  let matkhauVal = matkhau.value;
  taikhoanVal = taikhoanVal.trim();
  let checkTk = false;
  let checkMk = false;

  if (taikhoanVal.length < 1) {
    taikhoan.setAttribute("placeholder", "Tài khoản không được để trống");
    taikhoan.classList.add("input--error");
    taikhoan.style.border = "2px solid var(--color-danger)";
  } else if (taikhoanVal.length < 5 || taikhoanVal.length > 100) {
    displaySwal("Tài Khoản", "Vui lòng nhập từ 5 - 100 kí tự !", "error");
    taikhoan.style.border = "2px solid var(--color-danger)";
    return false;
  } else {
    taikhoan.style.border = "1px solid var(--color-border-input)";
    taikhoan.classList.remove("input--error");
    checkTk = true;
  }

  if (matkhauVal.length < 1) {
    matkhau.setAttribute("placeholder", "Mật khẩu không được để trống");
    matkhau.classList.add("input--error");
    matkhau.style.border = "2px solid var(--color-danger)";
  } else if (matkhauVal.length < 5) {
    displaySwal("Mật khẩu", "Vui lòng nhập nhiều hơn 5 kí tự !", "error");
    matkhau.style.border = "2px solid var(--color-danger)";
    return false;
  } else {
    matkhau.style.border = "1px solid var(--color-border-input)";
    matkhau.classList.remove("input--error");
    checkMk = true;
  }

  if (checkTk === true && checkMk === true) {
    return true;
  } else {
    return false;
  }
}

function displaySwal(title, description, icon) {
  swal(title, description, icon);
}

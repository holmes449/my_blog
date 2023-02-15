// Kiểm tra trước khi gửi đăng ký
function kiem_tra_dang_ky() {
  let ktTk, ktMk, ktMkNL, ktHo, ktTen, ktEmail;
  ktTk = false;
  ktMk = false;
  ktMkNL = false;
  ktHo = false;
  ktTen = false;
  ktEmail = false;

  let taikhoan = document.getElementById("js-tk").value;
  let matKhau = document.getElementById("js-mk").value;
  let nlMatKhau = document.getElementById("js-mknl").value;
  let email = document.getElementById("js-email").value;
  let ho = document.getElementById("js-ho").value;
  let ten = document.getElementById("js-ten").value;
  let expEmail = /^([a-zA-Z0-9_-\.]+)@([a-z_-\.]+)\.([a-z\.]{2,6})$/;
}

<!-- Trang Page Login -->
<?php
if (isset($_SESSION['user']) && is_array($_SESSION['user'])) { ?>
    <script>
        window.location.href = "home";
    </script>
<?php } else { ?>
    <article class="login">
        <form action="" method="post" class="login-myform">
            <div class="login-head">Đăng nhập</div>
            <input type="texts" name="taikhoan" id="js_taikhoan" class="input input--full login-input"
                placeholder="Tài khoản của bạn" />
            <br />
            <input type="password" name="matkhau" id="js_matkhau" class="input input--full login-input"
                placeholder="Mật khẩu" />
            <br />
            <div class="login-help"><a href="">Quên mật khẩu?</a></div>
            <input type="submit" value="Đăng nhập" class="btn btn--full login-btn" name="dangnhap"
                onclick="return check_login()" />
        </form>
    </article>
<?php }
?>
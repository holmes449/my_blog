<!-- Trang Page Register -->
<article class="register">
    <form action="" method="post" class="register-myform">
        <div class="register-head">Đăng ký</div>
        <input type="text" name="taikhoan" id="js-tk" class="input input--full register-input"
            placeholder="Tài khoản người dùng" />
        <br />
        <input type="text" name="ho" id="js-ho" class="input input--full register-input" placeholder="Họ của bạn" />
        <br />
        <input type="text" name="ten" id="js-ten" class="input input--full register-input" placeholder="Tên của bạn" />
        <br />
        <input type="email" name="email" id="js-email" class="input input--full register-input"
            placeholder="Email của bạn" />
        <br />
        <input type="password" name="matkhau" id="js-mk" class="input input--full register-input"
            placeholder="Mật khẩu" />
        <br />
        <input type="password" name="matkhaunhaplai" id="js-mknl" class="input input--full register-input"
            placeholder="Nhập lại mật khẩu" />
        <br />
        <div class="register-help"><a href="">Đã có tài khoản?</a></div>
        <input type="submit" value="Đăng ký" name="dangky" onclick="return kiem_tra_dang_ky()"
            class="btn btn--full register-btn" />
    </form>
</article>
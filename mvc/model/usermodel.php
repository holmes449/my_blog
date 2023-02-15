<?php
class UserModel extends Database
{
    // Lấy thông tin Admin
    function userSelectAdmin()
    {
        $sql = "SELECT * FROM tai_khoan WHERE vai_tro = 1";
        return $this->pdoQueryOne($sql);
    }

    // Lấy thông tin một tài khoản bằng id_tk
    function userSelectById($id)
    {
        $sql = "SELECT * FROM tai_khoan WHERE id_tk = ?";
        return $this->pdoQueryOne($sql, $id);
    }

    // Kiểm tra tài khoản
    function userCheckTk($tk)
    {
        $sql = "SELECT id_tk FROM tai_khoan WHERE ten_tk = ?";
        return $this->pdoExecute($sql, $tk);
    }

    // Kiểm tra tài khoản và mật khẩu
    function userCheckTkMk($tk, $mk)
    {
        $sql = "SELECT id_tk FROM tai_khoan WHERE ten_tk = ? AND mat_khau = ?";
        return $this->pdoExecute($sql, $tk, $mk);
    }

    // Lấy thông tin tài khoản bằng tài khoản & mật khẩu
    function userSelectByTkMk($tk, $mk)
    {
        $sql = "SELECT id_tk, ten_tk, ho, ten, vai_tro FROM tai_khoan WHERE ten_tk = ? AND mat_khau = ?";
        return $this->pdoQueryOne($sql, $tk, $mk);
    }
}
?>
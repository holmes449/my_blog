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
}
?>
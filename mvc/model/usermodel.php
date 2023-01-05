<?php
class UserModel extends Database
{
    function userSelectAdmin()
    {
        $sql = "SELECT * FROM tai_khoan WHERE vai_tro = 1";
        return $this->pdoQueryOne($sql);
    }

    function userSelectById($id)
    {
        $sql = "SELECT * FROM tai_khoan WHERE id_tk = ?";
        return $this->pdoQueryOne($sql, $id);
    }
}
?>
<?php
class PostModel extends Database
{
    function postSelectAll()
    {
        $sql = "SELECT * FROM bai_viet ORDER BY ngay_capnhat DESC";
        return $this->pdoQueryAll($sql);
    }

    function postSelectNoiBat()
    {
        $sql = "SELECT id_bv, tieu_de, anh_bia, ngay_capnhat, luot_xem FROM bai_viet WHERE noi_bat = 1 ORDER BY ngay_capnhat DESC";
        return $this->pdoQueryAll($sql);
    }

    function postSelectNewFour()
    {
        $sql = "SELECT id_bv, tieu_de, anh_bia, tom_tat, ngay_capnhat, luot_xem FROM bai_viet ORDER BY ngay_capnhat DESC LIMIT 4";
        return $this->pdoQueryAll($sql);
    }

    function postSelectNewSix()
    {
        $sql = "SELECT id_bv, tieu_de, anh_bia, tom_tat, ngay_capnhat, luot_xem FROM bai_viet ORDER BY ngay_capnhat DESC LIMIT 6";
        return $this->pdoQueryAll($sql);
    }

    function postSelectView()
    {
        $sql = "SELECT id_bv, tieu_de, anh_bia, tom_tat, ngay_capnhat, luot_xem FROM bai_viet ORDER BY luot_xem DESC LIMIT 4";
        return $this->pdoQueryAll($sql);
    }
}
?>
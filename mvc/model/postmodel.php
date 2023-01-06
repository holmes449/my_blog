<?php
class PostModel extends Database
{
    // Tất cả tin
    function postSelectAll()
    {
        $sql = "SELECT * FROM bai_viet ORDER BY ngay_capnhat DESC";
        return $this->pdoQueryAll($sql);
    }

    // Tin nổi bật
    function postSelectNoiBat()
    {
        $sql = "SELECT id_bv, tieu_de, anh_bia, ngay_capnhat, luot_xem FROM bai_viet WHERE noi_bat = 1 ORDER BY ngay_capnhat DESC";
        return $this->pdoQueryAll($sql);
    }

    // Tin mới nhất - 4 tin
    function postSelectNewFour()
    {
        $sql = "SELECT id_bv, tieu_de, anh_bia, tom_tat, ngay_capnhat, luot_xem FROM bai_viet ORDER BY ngay_capnhat DESC LIMIT 4";
        return $this->pdoQueryAll($sql);
    }

    // Tin mới nhất - 6 tin
    function postSelectNewSix()
    {
        $sql = "SELECT id_bv, tieu_de, anh_bia, tom_tat, ngay_capnhat, luot_xem FROM bai_viet ORDER BY ngay_capnhat DESC LIMIT 6";
        return $this->pdoQueryAll($sql);
    }

    // Tin xem nhiều
    function postSelectView()
    {
        $sql = "SELECT id_bv, tieu_de, anh_bia, tom_tat, ngay_capnhat, luot_xem FROM bai_viet ORDER BY luot_xem DESC LIMIT 4";
        return $this->pdoQueryAll($sql);
    }

    // Lấy tin theo chủ đề
    function postSelectByIdTag($id)
    {
        $sql = "SELECT bv.id_bv, tieu_de, anh_bia, luot_xem, ngay_capnhat FROM bai_viet as bv INNER JOIN baiviet_the as bv_tag ON bv.id_bv = bv_tag.id_bv WHERE bv_tag.id_tag = ?";
        return $this->pdoQueryAll($sql, $id);
    }

    // Lấy chi tiết tin
    function postSelectDetail($id)
    {
        $sql = "SELECT * FROM bai_viet WHERE id_bv = ?";
        return $this->pdoQueryOne($sql, $id);
    }

    // Lấy bài viết liên quan
    function postSelectLike($id_post)
    {
        $sql = "SELECT * FROM baiviet_the AS bv_tag INNER JOIN bai_viet AS bv ON bv_tag.id_bv = bv.id_bv WHERE id_tag IN(SELECT id_tag FROM baiviet_the WHERE id_bv = :id_post) AND bv.id_bv <> :id_post ORDER BY bv.ngay_capnhat DESC LIMIT 2";
        $kq = $this->pdoPrepare($sql);
        $kq->bindParam(':id_post', $id_post);
        $kq->execute();
        $gia_tri = $kq->fetchAll();
        return $gia_tri;
    }
}
?>
<?php
class CommentModel extends Database
{
    // Lấy tất cả cmt bài viết
    function cmtSelectAll($id_post)
    {
        $sql = "SELECT * FROM nhan_xet WHERE id_cmt_parent IS NULL AND id_bv = ? ORDER BY ngay_capnhat DESC";
        return $this->pdoQueryAll($sql, $id_post);
    }


    // Lấy tất cả cmt con
    function cmtSelectAllChild($id_parent)
    {
        $sql = "SELECT * FROM nhan_xet WHERE id_cmt_parent = ? ORDER BY ngay_capnhat DESC";
        return $this->pdoQueryAll($sql, $id_parent);
    }

    // Hiển thị số cmt mới - 6 cmt
    function cmtSelectNew()
    {
        $sql = "SELECT * FROM nhan_xet ORDER BY ngay_capnhat DESC LIMIT 6";
        return $this->pdoQueryAll($sql);
    }

    // Đếm số cmt trong một bài viết
    function cmtCountByIdPost($id)
    {
        $sql = "SELECT COUNT(*) as so_luong FROM nhan_xet WHERE id_bv = ?";
        return $this->pdoQueryOne($sql, $id);
    }
}
?>
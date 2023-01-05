<?php
class CommentModel extends Database
{
    function CmtSelectAll()
    {
    }

    function CmtSelectNew()
    {
        $sql = "SELECT * FROM nhan_xet ORDER BY ngay_capnhat DESC";
        return $this->pdoQueryAll($sql);
    }
}
?>
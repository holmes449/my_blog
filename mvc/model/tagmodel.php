<?php
class TagModel extends Database
{
    function tagSelectAll()
    {
        $sql = "SELECT * FROM the ORDER BY id_tag";
        return $this->pdoQueryAll($sql);
    }

    function tagSelectById($id_post)
    {
        $sql = "SELECT bv_tag.id_tag, ten_tag FROM the INNER JOIN baiviet_the as bv_tag ON the.id_tag = bv_tag.id_tag WHERE bv_tag.id_bv = ?";
        return $this->pdoQueryAll($sql, $id_post);
    }

    function tagNameById($id)
    {
        $sql = "SELECT * FROM the WHERE id_tag = ?";
        return $this->pdoQueryOne($sql, $id);
    }
}
?>
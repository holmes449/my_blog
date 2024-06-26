<?php
class Database
{
    protected $host = "localhost";
    protected $user = "root";
    protected $pass = "";
    protected $dbname = "blog_stories";

    // Kết nối với mysql bằng PDO
    function pdoConn()
    {
        $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->user, $this->pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }

    // Hàm thực hiện execute (Thêm - sửa - xóa)
    function pdoExecute($sql)
    {
        $array_param = array_slice(func_get_args(), 1);
        try {
            $conn = $this->pdoConn();
            $kq = $conn->prepare($sql);
            $kq->execute($array_param);
            return $kq->rowCount();
        } catch (PDOException $e) {
            echo $e->getMessage();
        } finally {
            unset($conn);
        }
    }

    // Hàm thực hiện lấy tất cả dữ liệu trả về một mảng
    function pdoQueryAll($sql)
    {
        $array_param = array_slice(func_get_args(), 1);
        try {
            $conn = $this->pdoConn();
            $kq = $conn->prepare($sql);
            $kq->execute($array_param);
            $gia_tri = $kq->fetchAll();
            return $gia_tri;
        } catch (PDOException $e) {
            echo $e->getMessage();
        } finally {
            unset($conn);
        }
    }

    // Hàm thực hiện lấy giá trị có điều kiện trả về một giá trị
    function pdoQueryOne($sql)
    {
        $array_param = array_slice(func_get_args(), 1);
        try {
            $conn = $this->pdoConn();
            $kq = $conn->prepare($sql);
            $kq->execute($array_param);
            $gia_tri = $kq->fetch(PDO::FETCH_ASSOC);
            return $gia_tri;
        } catch (PDOException $e) {
            echo $e->getMessage();
        } finally {
            unset($conn);
        }
    }

    // Hàm xử lý prepare ngoại lệ
    function pdoPrepare($sql)
    {
        try {
            $conn = $this->pdoConn();
            return $conn->prepare($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        } finally {
            unset($conn);
        }
    }
}
?>
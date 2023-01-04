<?php
class App
{
    protected $controller = "home";
    protected $action = "show";
    protected $param = [];
    function __construct()
    {
        // Mảng url [controller, action, param]
        $array_url = isset($_GET['url']) === true ? $this->strToArray($_GET['url']) : [];

        // Kiểm tra controller tồn tại hay không - có thì trả về
        if (isset($array_url[0])) {
            if (file_exists("./mvc/controller/" . $array_url[0] . ".php")) {
                $this->controller = $array_url[0];
            }
        }

        // Gọi controller
        require_once("./mvc/controller/" . $this->controller . ".php");

        // Kiểm tra action - hàm trong controller tồn tại hay không
        if (isset($array_url[1])) {
            if (method_exists($this->controller, $array_url[1])) {
                $this->action = $array_url[1];
            }
        }

        // Kiểm tra param tồn tại không
        if (count($array_url) > 2) {
            $this->param = array_slice($array_url, 2);
        }

        // Gọi function trong controller và truyển param dạng mảng vào
        call_user_func_array($this->newItem([$this->controller, $this->action]), $this->param);
    }

    // Xử lý chuỗi thành mảng
    function strToArray($string)
    {
        $array = explode("/", trim($string, " "));
        return $array;
    }

    // Khởi tạo và trả về đối tượng đầu tiên trong mảng
    function newItem($array)
    {
        if (is_array($array)) {
            $array[0] = new $array[0];
            return $array;
        }
    }
}
?>
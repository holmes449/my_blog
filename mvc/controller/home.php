<?php
class Home extends Controller
{
    function show()
    {
        $view = 'masterlayout';
        $page = 'home';

        // Gọi Model


        // Gọi View
        $arr_page = ['page' => $page];
        $this->view($view, $arr_page);
    }
}
?>
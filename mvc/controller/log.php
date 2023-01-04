<?php
class Log extends Controller
{
    function show()
    {
        $view = 'masterlayout';
        $page = 'login';
        $arr = ['page' => $page];
        $this->view($view, $arr);
    }

    function register()
    {
        $view = 'masterlayout';
        $page = 'register';
        $arr = ['page' => $page];
        $this->view($view, $arr);
    }
}
?>
<?php
class Blog extends Controller
{

    function show()
    {
        $view = 'masterlayout';
        $page = 'blogall';
        $arr_page = ['page' => $page];
        $this->view($view, $arr_page);
    }

    function type()
    {
        $view = 'masterlayout';
        $page = 'blogtype';
        $arr_page = ['page' => $page];
        $this->view($view, $arr_page);
    }

    function detail()
    {
        $view = 'masterlayout';
        $page = 'blogdetail';
        $arr_page = ['page' => $page];
        $this->view($view, $arr_page);
    }
}
?>
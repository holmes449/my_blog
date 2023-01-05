<?php
class Log extends Controller
{
    function show()
    {
        $view = 'masterlayout';
        $page = 'login';

        // Gọi Model
        $m_tag = $this->model("tagmodel");
        $arr_tag = $m_tag->tagSelectAll();

        // Gọi View
        $page = [
            'page' => $page,
            'tag' => $arr_tag
        ];
        $this->view($view, $page);
    }

    function register()
    {
        $view = 'masterlayout';
        $page = 'register';

        // Gọi Model
        $m_tag = $this->model("tagmodel");
        $arr_tag = $m_tag->tagSelectAll();

        // Gọi View
        $page = [
            'page' => $page,
            'tag' => $arr_tag
        ];
        $this->view($view, $page);
    }
}
?>
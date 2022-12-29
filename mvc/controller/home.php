<?php
class Home extends Controller
{
    function show()
    {
        $model = 'blogmodel';
        $layout = 'masterlayout';
        $page = 'home';

        // Gọi Model
        $kq = $this->model($model);

        $arrview = ['layout' => $layout, 'page' => $page, 'sanpham' => $kq->blog()];

        // Gọi View
        $this->view($arrview);
    }
}
?>
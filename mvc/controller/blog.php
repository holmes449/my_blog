<?php
class Blog extends Controller
{

    function show()
    {
        $view = 'masterlayout';
        $page = 'blogall';

        // Gọi Model
        $m_tag = $this->model("tagmodel");
        $m_post = $this->model("postmodel");
        $m_user = $this->model("usermodel");
        $m_cmt = $this->model("commentmodel");
        $arr_tag = $m_tag->tagSelectAll();
        $admin = $m_user->userSelectAdmin();
        $cmt = $m_cmt->CmtSelectNew();


        // Gọi View
        $page = [
            'page' => $page,
            'tag' => $arr_tag,
            'm_tag' => $m_tag,
            'm_post' => $m_post,
            'm_user' => $m_user,
            'admin' => $admin,
            'cmt' => $cmt
        ];
        $this->view($view, $page);
    }

    function type()
    {
        $view = 'masterlayout';
        $page = 'blogtype';

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

    function detail()
    {
        $view = 'masterlayout';
        $page = 'blogdetail';

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
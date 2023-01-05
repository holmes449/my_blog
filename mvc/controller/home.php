<?php
class Home extends Controller
{
    function show()
    {
        $view = 'masterlayout';
        $page = 'home';

        // Gọi Model
        $m_tag = $this->model("tagmodel");
        $m_post = $this->model("postmodel");
        $m_user = $this->model("usermodel");
        $m_cmt = $this->model("commentmodel");
        $arr_tag = $m_tag->tagSelectAll();
        $arr_post_noibat = $m_post->postSelectNoiBat();
        $admin = $m_user->userSelectAdmin();
        $cmt = $m_cmt->CmtSelectNew();


        // Gọi View
        $page = [
            'page' => $page,
            'tag' => $arr_tag,
            'm_tag' => $m_tag,
            'm_post' => $m_post,
            'm_user' => $m_user,
            'tin_noibat' => $arr_post_noibat,
            'admin' => $admin,
            'cmt' => $cmt

        ];
        $this->view($view, $page);
    }
}
?>
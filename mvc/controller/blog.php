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
        $cmt = $m_cmt->cmtSelectNew();
        $post = $m_post->postSelectAll();


        // Gọi View
        $page = [
            'page' => $page,
            'tag' => $arr_tag,
            'm_tag' => $m_tag,
            'm_post' => $m_post,
            'm_user' => $m_user,
            'admin' => $admin,
            'cmt' => $cmt,
            'post' => $post
        ];
        $this->view($view, $page);
    }

    function type($id_tag)
    {
        $view = 'masterlayout';
        $page = 'blogtype';

        // Gọi Model
        $m_tag = $this->model("tagmodel");
        $m_post = $this->model("postmodel");
        $m_user = $this->model("usermodel");
        $m_cmt = $this->model("commentmodel");
        $arr_tag = $m_tag->tagSelectAll();
        $admin = $m_user->userSelectAdmin();
        $cmt = $m_cmt->cmtSelectNew();
        $post = $m_post->postSelectByIdTag($id_tag);
        $name = $m_tag->tagNameById($id_tag);


        // Gọi View
        $page = [
            'page' => $page,
            'tag' => $arr_tag,
            'm_tag' => $m_tag,
            'm_post' => $m_post,
            'm_user' => $m_user,
            'admin' => $admin,
            'cmt' => $cmt,
            'post' => $post,
            'chude' => $name
        ];

        $this->view($view, $page);
    }

    function detail($id_post)
    {
        $view = 'masterlayout';
        $page = 'blogdetail';
        $id_post = (int) $id_post;

        // Gọi Model
        $m_tag = $this->model("tagmodel");
        $m_post = $this->model("postmodel");
        $m_user = $this->model("usermodel");
        $m_cmt = $this->model("commentmodel");
        $arr_tag = $m_tag->tagSelectAll();
        $post_detail = $m_post->postSelectDetail($id_post);
        $user = $m_user->userSelectById($post_detail['id_tk']);
        $tag = $m_tag->tagSelectById($id_post);
        $sum_cmt = $m_cmt->cmtCountByIdPost($id_post);
        $post_like = $m_post->postSelectLike($id_post);


        // Gọi View
        $page = [
            'page' => $page,
            'tag' => $arr_tag,
            'm_tag' => $m_tag,
            'm_post' => $m_post,
            'm_user' => $m_user,
            'm_cmt' => $m_cmt,
            'post' => $post_detail,
            'user' => $user,
            'tag_post' => $tag,
            'sum_cmt' => $sum_cmt,
            'post_like' => $post_like
        ];

        $this->view($view, $page);
    }
}
?>
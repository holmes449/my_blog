<?php
class Blog extends Controller
{

    protected $m_tag;
    protected $m_post;
    protected $m_user;
    protected $m_cmt;
    protected $nav;
    protected $admin;

    function __construct()
    {
        $this->m_tag = $this->model("tagmodel");
        $this->m_post = $this->model("postmodel");
        $this->m_user = $this->model("usermodel");
        $this->m_cmt = $this->model("commentmodel");
        $this->nav = $this->m_tag->tagSelectAll();
        $this->admin = $this->m_user->userSelectAdmin();
    }

    function show()
    {
        $view = 'masterlayout';
        $page = 'blog';

        // Gọi Model
        $post = $this->m_post->postSelectAll();


        // Gọi View
        $this->view('masterlayout', [
            'page' => 'blog',
            'nav' => $this->nav,
            'admin' => $this->admin,
            'm_tag' => $this->m_tag,
            'm_post' => $this->m_post,
            'm_user' => $this->m_user,
            'm_cmt' => $this->m_cmt,
            'post' => $post
        ]);

        echo $_GET['timkiem'];
    }

    function type($id_tag = 1)
    {
        // Gọi Model
        $post = $this->m_post->postSelectByIdTag($id_tag);
        $name = $this->m_tag->tagNameById($id_tag);


        // Gọi View
        $this->view('masterlayout', [
            'page' => 'blog',
            'nav' => $this->nav,
            'admin' => $this->admin,
            'm_tag' => $this->m_tag,
            'm_post' => $this->m_post,
            'm_user' => $this->m_user,
            'm_cmt' => $this->m_cmt,
            'post' => $post,
            'name' => $name
        ]);
    }

    function detail($id_post)
    {
        $id_post = (int) $id_post;

        // Gọi Model
        $post = $this->m_post->postSelectDetail($id_post);
        $user = $this->m_user->userSelectById($post['id_tk']);
        $tag = $this->m_tag->tagSelectById($id_post);
        $sum_cmt = $this->m_cmt->cmtCountByIdPost($id_post);
        $post_like = $this->m_post->postSelectLike($id_post);
        $this->m_post->postUpdateView($id_post);


        // Gọi View
        $this->view('masterlayout', [
            'page' => 'blogdetail',
            'nav' => $this->nav,
            'admin' => $this->admin,
            'm_tag' => $this->m_tag,
            'm_post' => $this->m_post,
            'm_user' => $this->m_user,
            'm_cmt' => $this->m_cmt,
            'post' => $post,
            'user' => $user,
            'tag_post' => $tag,
            'sum_cmt' => $sum_cmt,
            'post_like' => $post_like
        ]);
    }


}
?>
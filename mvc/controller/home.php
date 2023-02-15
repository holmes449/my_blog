<?php
class Home extends Controller
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
        // Tao bien

        // Nap View
        if (isset($_GET['timkiem']) && $_GET['timkiem'] != "") {
            $post = $this->m_post->postSelectName($_GET['timkiem']);

            $this->view('masterlayout', [
                'page' => 'blog',
                'nav' => $this->nav,
                'm_tag' => $this->m_tag,
                'm_post' => $this->m_post,
                'm_user' => $this->m_user,
                'm_cmt' => $this->m_cmt,
                'admin' => $this->admin,
                'timkiem' => $_GET['timkiem'],
                'post' => $post,
            ]);
        } else {
            $this->view('masterlayout', [
                'page' => 'home',
                'nav' => $this->nav,
                'admin' => $this->admin,
                'm_tag' => $this->m_tag,
                'm_post' => $this->m_post,
                'm_user' => $this->m_user,
                'm_cmt' => $this->m_cmt,
            ]);
        }
    }
}
?>
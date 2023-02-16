<?php
class Home extends Controller
{
    protected $m_tag;
    protected $m_post;
    protected $m_user;
    protected $m_cmt;
    protected $nav;
    protected $admin;
    protected $search;

    function __construct()
    {
        // Model
        $this->m_tag = $this->model("tagmodel");
        $this->m_post = $this->model("postmodel");
        $this->m_user = $this->model("usermodel");
        $this->m_cmt = $this->model("commentmodel");
        $this->nav = $this->m_tag->tagSelectAll();
        $this->admin = $this->m_user->userSelectAdmin();

        if (isset($_GET['timkiem']) && trim($_GET['timkiem']) != "") {
            $this->search = $_GET['timkiem'];
        } else {
            unset($this->search);
        }
    }

    function show()
    {
        $post = isset($this->search) ? $this->m_post->postSelectName($_GET['timkiem']) : null;

        // Nap View
        $this->view('masterlayout', [
            'page' => !isset($this->search) ? 'home' : 'blog',
            'nav' => $this->nav,
            'm_tag' => $this->m_tag,
            'm_post' => $this->m_post,
            'm_user' => $this->m_user,
            'm_cmt' => $this->m_cmt,
            'admin' => $this->admin,
            'timkiem' => isset($this->search) ? $this->search : null,
            'post' => $post,
        ]);
    }
}
?>
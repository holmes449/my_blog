<?php
class Log extends Controller
{
    protected $m_tag;
    protected $m_user;
    protected $nav;

    function __construct()
    {
        $this->m_tag = $this->model("tagmodel");
        $this->m_user = $this->model("usermodel");
        $this->nav = $this->m_tag->tagSelectAll();
    }

    function show()
    {

        if (isset($_SESSION['user'])) {
            header("Location: " . ROOT_URL);
        } else {
            // Gọi View
            if (isset($_POST['dangnhap'])) {
                $tai_khoan = $_POST['taikhoan'];
                $mat_khau = sha1($_POST['matkhau']);
                $tai_khoan = trim($tai_khoan, " ");

                // Check tai khoan
                if ($this->m_user->userCheckTk($tai_khoan) > 0) {
                    if ($this->m_user->userCheckTkMk($tai_khoan, $mat_khau) > 0) {
                        $user = $this->m_user->userSelectByTkMk($tai_khoan, $mat_khau);

                        $_SESSION['user'] = [
                            'id' => $user['id_tk'],
                            'taikhoan' => $user['ten_tk'],
                            'ho' => $user['ho'],
                            'ten' => $user['ten'],
                            'vaitro' => $user['vai_tro']
                        ];

                        echo "<script>alert('Đăng nhập thành công');</script>";
                    } else {
                        echo "<script>alert('Mật khẩu không đúng');</script>";
                    }
                } else {
                    echo "<script>alert('tài khoản không tồn tại');</script>";
                }
            }
        }

        $this->view('masterlayout', [
            'page' => 'login',
            'nav' => $this->nav,
            'm_tag' => $this->m_tag,
            'm_user' => $this->m_user,
        ]);
    }

    function register()
    {
        // Gọi View
        $this->view('masterlayout', [
            'page' => 'register',
            'nav' => $this->nav,
            'm_tag' => $this->m_tag,
            'm_user' => $this->m_user,
        ]);
    }

    function logout($id)
    {
        $id = (int) $id;

        if (isset($_SESSION['user']) && $_SESSION['user']['id'] === $id) {
            session_destroy();
            header("Location: " . ROOT_URL . "/log");
        }
    }

    // Xem thông tin
    function info()
    {

        if (isset($_SESSION['user'])) {

            // Gọi Model
            $user = $this->m_user->userSelectById($_SESSION['user']['id']);

            // Gọi View
            $this->view('masterlayout', [
                'page' => 'userinfo',
                'nav' => $this->nav,
                'user' => $user
            ]);
        } else {
            header("Location: " . ROOT_URL);
        }
    }
}
?>
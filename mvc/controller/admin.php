<?php
class Admin
{
    function show()
    {
        if (isset($_SESSION['user']) && $_SESSION['user']['vaitro'] === 1) {
            echo 'OK';
        } else {
            header("Location: " . ROOT_URL);
        }
    }
}
?>
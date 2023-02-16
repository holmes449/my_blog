<?php
class Page_Number extends Controller
{
    protected $m_post;

    function __construct()
    {
        $this->m_post = $this->model('postmodel');


    }

}
?>
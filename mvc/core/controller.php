<?php
class Controller
{
    // Model
    function model($model)
    {
        require_once("./mvc/model/" . $model . ".php");
        return new $model;
    }

    // View
    function view($view, $page = [])
    {
        require_once('./mvc/view/' . $view . '.php');
    }
}
?>
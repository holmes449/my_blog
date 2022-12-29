<?php
class Controller
{
    // Model
    protected function model($model)
    {
        require_once("./mvc/model/" . $model . ".php");
        return new $model;
    }

    // View
    protected function view($view)
    {
        require_once('./mvc/view/' . $view['layout'] . '.php');
    }
}
?>
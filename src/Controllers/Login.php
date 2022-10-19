<?php

namespace Project\Blog\Controllers;

use Project\Blog\Views\View;

/**
 * コントローラーが最小限持つべきプロパティとメソッドを持つ抽象クラス
 */
class Login
{

    private View $view;

    public function __construct(string $path = "index")
    {
        $this->view = new View($path);
    }

    public function index()
    {
        $this->view->render();
    }
}

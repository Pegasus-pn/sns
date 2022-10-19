<?php

namespace Project\Blog\Views;

/**
 * @property string $path ファイルパス
 * @property array $variables ビューファイルに渡す変数
 */
class View
{

    private string $path;
    private array $variables = [];

    public function __construct(string $path, array ...$variables)
    {
        $this->path = $path;
        $this->setAll($variables);
        $this->setScript();
        $this->setStyle();
    }

    public function render()
    {
        ob_start();
        extract($this->variables);
        include SRC_DIR . "/Views/" . $this->path . ".php";
        echo ob_get_clean();
    }

    private function setAll(array $variables)
    {
        foreach ($variables as $varObject) {
            $this->set($varObject);
        }
    }

    private function set(array $varObject)
    {
        $this->variables = array_merge($this->variables, $varObject);
    }

    private function setStyle()
    {
        $this->set(["stylePath" => "./styles/" . $this->path . ".css"]);
    }

    private function setScript()
    {
        $this->set(["scriptPath" => "./scripts/" . $this->path . ".js"]);
    }
}

<?php

class ViewController{

    public function fillContent($viewName = "ArtistaView", $content = null)
    {
        global $info;
        $info = $content;
        $view = __DIR__."/../views/$viewName.php";
        ob_start();
            include($view);
        $html = ob_get_clean();

        return $html;
    }
}
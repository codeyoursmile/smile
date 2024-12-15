<?php
namespace Core;

class View {
    public static function render($view, $data = []) {
        extract($data);
        $viewFile = APP_PATH . '/Views/' . $view . '.php';
        if (!file_exists($viewFile)) {
            die("View file $viewFile not found.");
        }
        include $viewFile;
    }
}

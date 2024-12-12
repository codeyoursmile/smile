<?php
namespace Core;

class App {
    public static function run() {
        // 加载配置
        require BASE_PATH . '/config/config.php';
        // 路由处理
        $router = new Router();
        $router->dispatch();
    }
}

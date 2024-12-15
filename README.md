**全新设计的轻量型PHP框架**

smile框架是一个基于现代PHP开发最佳实践、集成Composer的轻量型PHP框架的设计方案。

**框架目标**

轻量化：简洁的代码结构，功能模块化。
扩展性：通过 Composer 和 PSR-4 自动加载，支持第三方库。
开发友好：使用 MVC 模式，提供清晰的逻辑分层。
测试支持：集成 PHPUnit，便于编写单元测试。
现代化：符合 PSR-1/PSR-2/PSR-4 等 PHP 标准。

**目录结构**

```
smile/
├── app/                 # 应用目录
│   ├── Controllers/       # 控制器目录
│   │   └── HomeController.php
│   ├── Models/            # 模型目录
│   │   └── UserModel.php
│   ├── Views/             # 视图目录
│       └── home.php
├── config/                # 配置文件目录
│   └── config.php         # 框架配置文件
├── core/                  # 核心框架代码
│   ├── App.php            # 框架初始化
│   ├── Controller.php     # 控制器基类
│   ├── Model.php          # 模型基类
│   ├── Router.php         # 路由系统
│   └── View.php           # 视图类
├── public/                # 公开目录
│   ├── index.php          # 框架入口文件
│   └── .htaccess          # Apache 重写规则
├── tests/                 # 测试目录
│   └── ExampleTest.php    # 示例测试
├── vendor/                # Composer 自动生成
├── composer.json          # Composer 配置文件
└── README.md              # 项目说明文件
```

**使用方法**

1.创建一个空数据库
2.将smile.sql导入你的数据库（就是一个示例）
3.将config/config.php的配置文件按照你自己的来修改
4.直接放置在网站根目录 把运行目录设置为/public 即可访问
5.在网站根目录，按需使用composer require 命令引入你想要使用库，不需要可以不引用
6.目前该框架使仅仅用Composer引入了phpunit和symfony/var-dumper这两个库用于单元测试和调试
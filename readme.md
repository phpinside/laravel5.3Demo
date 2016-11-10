##安装

1. 克隆到本地： git clone https://github.com/phpinside/laravel5.3Demo.git
2. 下载相关第三方依赖: composer install
3. 改名 .env.example  为 .env ，并配置好相关参数
4. 执行命令： php artisan migrate  ，生成数据库 [mysql服务要先配置好]
5. 在blog当前目录运行 php -S 0.0.0.0:1024 ，启动本程序
6. 浏览器访问：http://localhost:1024 即可
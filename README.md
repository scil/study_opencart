# Log

current version: 3.0.3.8

- 中文语言 2022.03.19
- vQmod 2022.03.20
  1. v2.6.6 https://github.com/vqmod/vqmod/releases
  2. 解压到 upload 目录, linux需要配置好权限 http://docs.opencart.com/en-gb/administration/vqmod/
  3. visit `/vqmod/install`
- log db pdo query 2022.03.20
  - 如何禁用  `const SCIL_ENABLE_DB_PDO_LOG = false ` 目前此变量自动添加在了 system/framework.php
  - 每次请求生成一个日志文件:  利用 constant_SCIL_OC_START_TIME.xml 添加基本能够对应每次请求的变量 `SCIL_OC_START_TIME`

## Env
- php  
  - `php -i | find "xdebug"` 确认 xdebug 工作正常，xdebug3配置变了名字
- mysql   `mysql -u root -p -e "create database japan1;"`
- 服务器 两种方案 用 php -S 或 php-fpm
  - php cli server: start-php-server.bat
  - linux
    - php-fpm 见 nginx/readme

## install for server with php-fpm 

### method1: web
Start Server then go to `http://192.168.1.200:8080/install`

### method2: cli_install.php
```
php upload/install/cli_install.php install --db_hostname 192.168.1.200 --db_username zc --db_password jinzhao245 --db_database opencart --username admin --password jinzhao245 --email somebody@somewhere.com --http_server http://192.168.1.200:8080/
```


## Start Server

```
cd upload
php -S localhost:8080
```

or use nginx, see `nginx/readme.md`

## Todo

[ ] theme  Journal Opencart
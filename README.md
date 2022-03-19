# Study OpenCart 

current version: 3.0.3.8

## Env
- php
- mysql   `mysql -u root -p -e "create database japan1;"`
- 服务器 两种方案 用 php -S 或 php-fpm
  - php cli server: start-php-server.bat
  - linux
    - php-fpm 见 nginx/readme

## install

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
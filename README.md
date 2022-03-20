# Log

current version: 3.0.3.8

- �������� 2022.03.19
- vQmod 2022.03.20
  1. v2.6.6 https://github.com/vqmod/vqmod/releases
  2. ��ѹ�� upload Ŀ¼, linux��Ҫ���ú�Ȩ�� http://docs.opencart.com/en-gb/administration/vqmod/
  3. visit `/vqmod/install`
- log db pdo query 2022.03.20

## Env
- php
- mysql   `mysql -u root -p -e "create database japan1;"`
- ������ ���ַ��� �� php -S �� php-fpm
  - php cli server: start-php-server.bat
  - linux
    - php-fpm �� nginx/readme

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
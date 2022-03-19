
# 方案一：不用nginx，直接与 php-fpm 通信
```
# 先修改里面的地址
./cgi.sh
```

# 方案二：使用nginx命令行，不用nginx服务

```
# run nginx:
cd  /vagrant/www/opencart/  && sudo chmod 777 /var/run/php/php7.4-fpm.sock  &&  sudo nginx -c `pwd`/nginx/nginx-site.conf -p "`pwd`"
# then:
curl localhost:8080/install
```

```
# shut down
killall nginx
```

echo url:       localhost:8000/admin
echo name:  admin
echo pw:      jinzhao
:: router.php has not been tested seccusefully
::php -S localhost:8000 -t upload/ router.php
php -S localhost:8000 -t upload/   -c upload\php.ini 

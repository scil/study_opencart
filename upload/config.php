<?php
// HTTP
define('HTTP_SERVER', 'http://localhost:8000/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost:8000/');

// DIR
define('DIR_APPLICATION', 'D:/vagrant/www/japan/opencart/upload/catalog/');
define('DIR_SYSTEM', 'D:/vagrant/www/japan/opencart/upload/system/');
define('DIR_IMAGE', 'D:/vagrant/www/japan/opencart/upload/image/');
define('DIR_STORAGE', 'D:/vagrant/www/japan/opencart/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'pdo');
define('DB_HOSTNAME', '192.168.1.200');
define('DB_USERNAME', 'zc');
define('DB_PASSWORD', 'jinzhao245');
define('DB_DATABASE', 'japan1');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
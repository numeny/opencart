<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/');

// DIR
define('DIR_APPLICATION', '/Library/WebServer/Documents/mysiggor.git/opencart/upload/catalog/');
define('DIR_SYSTEM', '/Library/WebServer/Documents/mysiggor.git/opencart/upload/system/');
define('DIR_IMAGE', '/Library/WebServer/Documents/mysiggor.git/opencart/upload/image/');
define('DIR_STORAGE', '/Library/WebServer/Documents/mysiggor.git/opencart/upload/system/storage/');
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
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'myuser');
define('DB_PASSWORD', '1');
define('DB_DATABASE', 'mydatabase');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

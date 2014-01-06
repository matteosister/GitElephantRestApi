<?php
/**
 * User: matteo
 * Date: 16/08/13
 * Time: 11.53
 * Just for fun...
 */

require_once __DIR__.'/../vendor/autoload.php';

define('DEBUG', true);
$filename = __DIR__.preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}
$app = require_once __DIR__.'/../app/app.php';

$app->run();

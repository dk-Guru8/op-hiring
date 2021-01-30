<?php
error_reporting(E_ALL);

define('APP_PATH',          '/app');

include '/php/vendor/autoload.php';

function conf(){
   return Phalcon\DI::getDefault()->getConfig();
}

$di = new Phalcon\Di\FactoryDefault;

$files = array (
    'config',
    'router',
    'view'
);
foreach ($files as $filename) {
    $di->set($filename, require_once(APP_PATH. '/di/'.$filename.'.php'));
}

$di->set('app', new Phalcon\Mvc\Application($di));

$di->getApp()->handle()->send();

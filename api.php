<?php

spl_autoload_register(function($class) {
    $filename = str_replace('\\', '/', $class) . '.php';
    require($filename);
});

use api\Feedback;
use api\Getfeedback;


$url = $_SERVER['REQUEST_URI'];
$route = explode('/', $url)[2];

if ($route == 'feedback') {
    return (new Feedback())->save();
}
if ($route == 'getfeedback') {
    return (new Getfeedback())->getSuccess();
}
header("HTTP/1.0 404 Not Found");

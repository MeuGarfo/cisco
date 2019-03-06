<?php
require '../basic/basic.php';
inc([
    'controller',
    'e',
    'error',
    'segment',
    'view',
]);
error();
$controllerName=segment(1);
if($controllerName=='/'){
    $controllerName='index';
}
if(!controller($controllerName)){
    echo '404';
}

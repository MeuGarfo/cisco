<?php
require '../basic/basic.php';
inc([
    'controller',
    'e',
    'segment',
    'view',
]);
$controllerName=segment(1);
if($controllerName=='/'){
    $controllerName='index';
}
if(!controller($controllerName)){
    echo '404';
}

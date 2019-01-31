<?php
require '../basic/basic.php';
inc([
    'controller',
    'e',
    'segment',
    'view',
]);
$controller=segment(1);
switch($controller){
    case '/':
    controller('index');
    break;
}

<?php
require '../basic/basic.php';
inc([
    'controller',
    'e',
    'view',
]);
$data=[
    'var'=>'hello'
];
controller('single',$data);

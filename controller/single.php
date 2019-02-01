<?php
inc([
    'db',
    'model'
]);
$db=db();
$data=[
    'site'=>@$_POST['site'],
    'db'=>$db
];
$site=model('single',$data);
var_dump($site);
// ?>

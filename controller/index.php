<?php
inc([
    'db',
    'model'
]);

//busca single
model('sites');
$single=false;
if(isset($_GET['single']) && is_numeric($_GET['single'])){
    if($_GET['single']>0 && $_GET['single']<1000001){
        $single=readSingle($_GET['single']);
    }
}
if(!$single){
    $single=readSingle(1);
}
$data=[
    'title'=>'Cisco',
    'single'=>$single
];

view('index',$data);
?>

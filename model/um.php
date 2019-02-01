<?php
//pegar o date do último site
$sql='SELECT MAX(id) FROM sites;';
$max['id']=$db->query($sql)->fetchAll()[0][0];
$where=[
    'id'=>$max['id']
];
$max=$db->get("sites",'*',$where);
$where=[
    'date[~]'=>$max['date']
];
$sql='SELECT MIN(id) FROM sites WHERE date=´'.$max['date'].'´;';
$min['id']='31456801';
$where=[
    'AND'=>[
        'site[~]'=>$site,
        'id[<>]'=>[$min['id'],$max['id']]
    ],
    'ORDER'=>[
        'id'=>'ASC'
    ]
];
return $db->get('sites','*',$where);
?>

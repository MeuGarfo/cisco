<?php
function readSite($db,$site,$dia){
    $limites=require 'inc/limites.php';
    $dia=$dia-1;
    $limite=$limites[$dia];
    $where=[
        'AND'=>[
            'site[~]'=>$site,
            'id[<>]'=>[$limite['min'],$limite['max']]
        ],
        'ORDER'=>[
            'id'=>'ASC'
        ]
    ];
    return $db->get('sites','*',$where);
}
function readSiteMonth($db,$site){
    $i=1;
    $days=[];
    while ($i<=31) {
        $days[$i++]=readSite($db,$site,$i);
    }
    return $days;
}
?>

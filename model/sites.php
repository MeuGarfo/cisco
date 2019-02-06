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
    $cols=[
        'ranking'
    ];
    return @$db->get('sites',$cols,$where)['ranking'];
}
function readSiteMonth($db,$site){
    $i=1;
    $pontos=[];
    while ($i<=31) {
        $pontos[$i++]=readSite($db,$site,$i);
    }
    return formatMonthJson($site,$pontos);
}
function formatMonthJson($site,$pontos){
    $dataPoints=[];
    foreach ($pontos as $dia => $ranking) {
        $dataPoints[]=[
            'x'=>'new Date(2018,11,'.$dia.')',
            'y'=>$ranking
        ];
    }
    $data=[
        'type'=>'line',
        'name'=>$site,
        'showInLegend'=>'true',
        'dataPoints'=>$dataPoints
    ];
    $str=json_encode($data,JSON_PRETTY_PRINT);
    $str=str_replace('"x": "','x: ',$str);
    $str=str_replace('"y": "','y: ',$str);
    $str=str_replace(')"',')',$str);
    $str=str_replace('"
        }','
        }',$str);
    return $str;
}
?>

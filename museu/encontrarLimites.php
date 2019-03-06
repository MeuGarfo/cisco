<?php
/*
extrai os limites do mês de dezembro de 2018
*/
require '../basic/basic.php';
inc([
    'db',
    'error'
]);
error();
$db=db();
$dates=[
    1543629600,
    1543716000,
    1543802400,
    1543888800,
    1543975200,
    1544061600,
    1544148000,
    1544234400,
    1544320800,
    1544407200,
    1544493600,
    1544580000,
    1544666400,
    1544752800,
    1544839200,
    1544925600,
    1545012000,
    1545098400,
    1545184800,
    1545271200,
    1545357600,
    1545444000,
    1545530400,
    1545616800,
    1545703200,
    1545789600,
    1545876000,
    1545962400,
    1546048800,
    1546135200,
    1546221600
];

$intervalos=[];
$dia=1;
foreach ($dates as $key => $value) {
    $where=[
        'date'=>trim($value)
    ];
    $site=$db->get('sites','*',$where);
    if(!$site){
        die("erro 1");
    }
    $primeiroId=$site['id'];
    $date=trim($site['date']);
    $sql="SELECT MAX(id) FROM sites WHERE date=$date;";
    $result=$db->query($sql)->fetchAll();
    if(!$result){
        die('erro 2');
    }
    $ultimoId=$result[0][0];
    $intervalos[$dia]=[
        'min'=>$primeiroId,
        'max'=>$ultimoId
    ];
    $dia++;
}
print '<pre>';
var_export($intervalos);

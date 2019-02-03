<?php
view("inc/header",$data);
?>
<h1><?php e($title); ?></h1>
<?php
view('form/dois',$data);
?>
<?php
$site=false;
if(isset($sitea)){
    $site=$sitea;
}
if(isset($site) && $site){
    print "<h1>{$site['site']} {$site['ranking']}</h1>";
    $date=date('r',$site['date']);
    print "<small>{$date}</small><br>";
}elseif(isset($sitea) && !$sitea){
    print "site a não encontrado<br>";
}
if(isset($siteb)){
    $site=$siteb;
}
if(isset($site) && $site){
    print '<hr>';
    print "<h1>{$site['site']} {$site['ranking']}</h1>";
    $date=date('r',$site['date']);
    print "<small>{$date}</small><br>";
}elseif(isset($siteb) && !$siteb){
    print "site b não encontrado<br>";
}
?>

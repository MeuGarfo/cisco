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
function printSite($site){
    print $site['site'].'<br>';
    print $site['ranking'].'<br>';
    print date('d',$site['date']);
    print "<hr>";
}
if(isset($site) && $site){
    printSite($site);
}elseif(isset($sitea) && !$sitea){
    print "site a não encontrado<br>";
}
if(isset($siteb)){
    $site=$siteb;
}
if(isset($site) && $site){
    printSite($site);
}elseif(isset($siteb) && !$siteb){
    print "site b não encontrado<br>";
}
?>

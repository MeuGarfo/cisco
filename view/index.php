<?php
view("inc/header",$data);
?>
<h1><?php e($title); ?></h1>
<?php
view('form/single',$data);
?>
<?php
if(isset($site) && $site){
    print '<hr>';
    print "<h1>{$site['site']}</h1>";
    print "<p>{$site['ranking']}</p>";
    $date=date('r',$site['date']);
    print "<small>{$date}</small>";
}elseif(isset($site) && !$site){
    print "site não encontrado";
}
?>

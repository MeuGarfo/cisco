<?php
view("inc/header",$data);
?>
<h1><?php e($title); ?></h1>
<?php
view('form/sites',$data);
?>
<?php
if(isset($sitea,$siteb)){
    print '<pre>';
    var_export($sitea);
    print '<hr>';
    var_export($siteb);
}
?>

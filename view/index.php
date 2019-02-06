<?php
view("inc/header",$data);
?>
<h1><?php e($title); ?></h1>
<?php
view('form/sites',$data);
?>
<?php
if(isset($sitea,$siteb)){
    view('graph',$data);
}
?>

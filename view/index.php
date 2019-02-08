<?php
view("inc/header",$data);
?>
<h1>
    <a href="/">
        <?php e($title); ?>
    </a>
</h1>
<?php
view('form/sites',$data);
?>
<?php
if(isset($sites)){
    view('graph',$data);
}
?>

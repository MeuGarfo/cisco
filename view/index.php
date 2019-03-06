<?php

view("inc/header",$data);
?>
<h1>
    <a href="/">
        <?php e($title); ?>
    </a>
</h1>
<?php
if(isset($single)){
    view('inc/single',$data);
}
view('form/sites',$data);
if(isset($sites)){
    view('graph',$data);
}
?>

<?php

view("inc/header",$data);
?>
<h1>
    <a href="/">
        <?php e($title); ?>
    </a>
</h1>
<p>
    <?php
    print $single['ranking'].'. '.$single['site'];
    ?><br>
    <?php
    $ranking=$single['ranking'];
    if($ranking=='1'){
        $next=$ranking+1;
    }elseif($ranking>1 && $ranking<1000001){
        $next=$ranking+1;
    }else{
        $next=0;
    }
    $previous=$ranking-1;
    if($ranking>1){
        ?>
        <a href="?single=<?php print $previous; ?>">Anterior</a> |
        <?php
    }
    if($next>0){
        ?>
        <a href="?single=<?php print $next; ?>">Próximo</a>
        <?php
    }
    ?>
</p>
<?php
view('form/sites',$data);
?>
<?php
if(isset($sites)){
    view('graph',$data);
}
?>

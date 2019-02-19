<p>
    <?php
    $link="http://{$single['site']}";
    $link='<a target="_blank" href="'.$link.'">http://'.$single['site'].'</a>';
    print $single['ranking'].'. '.$link;
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

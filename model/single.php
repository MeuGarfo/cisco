<?php
$where=[
    'site'=>$site
];
return $db->get('sites','*',$where);
?>

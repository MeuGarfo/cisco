<?php
inc([
    'db',
    'model'
]);

set_time_limit(3);
model("sites");

$sites=file_get_contents(ROOT.'sites.txt');
$site=explode(PHP_EOL,$sites);
foreach ($sites as $id_do_site) {
    $url=readSingle($id_do_site)['site'];
    $url=trim($url);
    if(count(explode('.',$url))==2){
        $filename=ROOT.''
        file_put_contents($filename,$data,FILE_APPEND);
    }
}

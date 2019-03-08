<?php
inc([
    'db',
    'model'
]);

set_time_limit(0);
model("sites");

$sites=file_get_contents(ROOT.'sites.txt');
$sites=explode(PHP_EOL,$sites);
foreach ($sites as $id_do_site) {
    $url=readSingle($id_do_site)['site'];
    $url=trim($url);
    $site=explode('.',$url);
    if(count($site)==3 OR count($site)==4){
        if($site[0]=='www'){
            $filename=ROOT.'www.txt';
            $data=$url.PHP_EOL;
            file_put_contents($filename,$data,FILE_APPEND);
            print $url.'<br>';
        }
    }
}

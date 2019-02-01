<?php
require './basic/basic.php';
inc([
    'backup'
]);
$filename=ROOT.'backup.sql';
print 'exportando DB para o arquivo backup.sql...'.PHP_EOL;
export($filename);

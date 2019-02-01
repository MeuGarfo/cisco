<?php
require './basic/basic.php';
inc([
    'backup'
]);
$filename=ROOT.'backup.sql';
print 'exportando banco de dados...'.PHP_EOL;
export($filename);

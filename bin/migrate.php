<?php
require './basic/basic.php';
system("clear");
inc([
    'db',
    'migrate'
]);
$db=db();
echo 'migrando tabelas...'.PHP_EOL;
if(migrate($db)){
    print 'tabelas migradas com sucesso'.PHP_EOL;
}else{
    print 'erro ao migrar as tabelas';
}
 ?>

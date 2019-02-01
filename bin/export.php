<?php
require './basic/basic.php';
system("clear");
$filename=ROOT.'backup.sql';
print 'Disite a senha do seu banco de dados:'.PHP_EOL;
system('mysqldump -v -u root -p cisco > "'.ROOT.'backup.sql"');
print 'banco de dados exportado com sucesso!'.PHP_EOL;

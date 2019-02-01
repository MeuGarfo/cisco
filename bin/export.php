<?php
$filename=ROOT.'backup.sql';
print 'exportando DB para o arquivo backup.sql...'.PHP_EOL;
system('mysqldump -u root -p cisco > "'.ROOT.'backup.sql"');
print 'banco de dados exportado com sucesso!'.PHP_EOL;

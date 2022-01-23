<?php
//require_once 'a.php';

$dir = opendir('C:/wamp64/www');
while ($arquivo = readdir($dir)) {
	print $arquivo . '<br>' . PHP_EOL;
}
closedir($dir);

// foreach (new DirectoryIterator('/tmp') as $file) {
// 	print (string) $file . '<br>' . PHP_EOL;
// 	print 'Nome: ' . $file->getFileName() . '<br>' . PHP_EOL;
// 	print 'Extensão: ' . $file->getExtension() . '<br>' . PHP_EOL;
// 	print 'Tamanho: ' . $file->getSize() . '<br>' . PHP_EOL;
// 	print '<br>' . PHP_EOL;
// }

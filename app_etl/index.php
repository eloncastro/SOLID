<?php

require join(DIRECTORY_SEPARATOR, [__DIR__, "vendor", "autoload.php"] );

use src\Leitor;

$leitor = new Leitor;
$leitor->setDiretorio(
    join(DIRECTORY_SEPARATOR, [__DIR__, "arquivos"] )
);
$leitor->setArquivo('dados.csv');

echo '<pre>';
print_r($leitor->lerArquivo());
echo '</pre>';
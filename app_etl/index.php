<?php

require join(DIRECTORY_SEPARATOR, [__DIR__, "vendor", "autoload.php"] );

use src\Leitor;

// Leitura de arquivo TXT
$leitorTXT = new Leitor;
$leitorTXT->setDiretorio(
    join(DIRECTORY_SEPARATOR, [__DIR__, "arquivos"] )
);
$leitorTXT->setArquivo('dados.txt');
$arr_txt = $leitorTXT->lerArquivo();

// Leitura de arquivo CSV
$leitorCSV = new Leitor;
$leitorCSV->setDiretorio(
    join(DIRECTORY_SEPARATOR, [__DIR__, "arquivos"] )
);
$leitorCSV->setArquivo('dados.csv');
$arr_csv = $leitorCSV->lerArquivo();

// Merge dos dados extraidos dos arquivos
echo '<pre>';
print_r(array_merge($arr_txt, $arr_csv));
echo '</pre>';


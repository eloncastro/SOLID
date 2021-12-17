<?php

require join(DIRECTORY_SEPARATOR, [__DIR__, "vendor", "autoload.php"] );

use src\Leitor;

// Armaszena leitura final dos arquivos
$arr_all = [];

// Leitura de arquivo TXT
$leitorTXT = new Leitor;
$leitorTXT->setDiretorio(
    join(DIRECTORY_SEPARATOR, [__DIR__, "arquivos"] )
);
$leitorTXT->setArquivo('dados.txt');
if($arr_txt = $leitorTXT->lerArquivo()){
    $arr_all = array_merge($arr_all, $arr_txt);
    unset($arr_txt);
}

// Leitura de arquivo CSV
$leitorCSV = new Leitor;
$leitorCSV->setDiretorio(
    join(DIRECTORY_SEPARATOR, [__DIR__, "arquivos"] )
);
$leitorCSV->setArquivo('dados.csv');
if($arr_csv = $leitorCSV->lerArquivo()){
    $arr_all = array_merge($arr_all, $arr_csv);
    unset($arr_csv);
}

// Merge dos dados extraidos dos arquivos
echo '<pre>';
print_r($arr_all);
echo '</pre>';


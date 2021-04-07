<?php
$idadeList = ["Luan", 22, 23, 24, 25, 26, 29, 30];
$idadeList[] = 20;
echo "Tamanho da Lista: " . count($idadeList) . "<br/>";
list($idadeLuan) = $idadeList;

for ($i=0; $i <= count($idadeList); $i++) {
    echo $idadeList[$i] . "<br/>"; 
}
?>
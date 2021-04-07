<?php

$string = 'testes de integração com PHP';
echo mb_strlen($string) . '<br/>';
echo mb_strtoupper($string) . '<br/>';

$convertida =  mb_convert_case ($string, mode: MB_CASE_TITLE);
echo $convertida;

?>
<?php

header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private", false);
header("Content-Type: text/csv; charset=ISO-8859-1");
//header('Content-Encoding: UTF-8');
header("Content-Disposition: attachment; filename=\"method3.csv\";" );
header("Content-Transfer-Encoding: binary");

$out = fopen('php://output', 'w');
fputs( $out, file_get_contents(__DIR__.'/files/csv1.csv') );
fclose($out);
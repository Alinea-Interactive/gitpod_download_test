<?php

$tmpname = tempnam( sys_get_temp_dir(), "csv_" );
copy(__DIR__.'/files/csv1.csv', $tmpname);

header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private", false);
header("Content-Type: text/csv; charset=ISO-8859-1");
header('Content-Encoding: UTF-8');
header("Content-Disposition: attachment; filename=\"method4.csv\";" );
header("Content-Transfer-Encoding: binary");
header('Content-Length: ' . filesize($tmpname));

setcookie(
    "downloadToken",
    time(),
    2147483647,            // expires January 1, 2038
    "/",                   // your path
    $_SERVER["HTTP_HOST"], // your domain
    true,                  // Use true over HTTPS
    false
);

error_log($tmpname);
error_log( file_get_contents($tmpname) );

ob_clean();
flush();
//UTF-8 byte order marker. This enables excel to import the file without any UTF-8 issues
//ref: https://stackoverflow.com/questions/6002256/is-it-possible-to-force-excel-recognize-utf-8-csv-files-automatically
echo chr(239) . chr(187) . chr(191);

readfile($tmpname);
unlink($tmpname);

exit();
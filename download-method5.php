<?php

$tmpname = __DIR__.'/files/csv1.csv';

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="method5.csv"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));

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

exit();
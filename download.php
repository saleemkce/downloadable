<?php
#setting headers
# added file type and file path as comments in new branch.
$type = 'application/png';
$file = 'https://ssl.gstatic.com/gb/images/v1_376447c3.png';
header('Content-Description: File Transfer');
header('Cache-Control: public');
header('Content-Type: '.$type);
header("Content-Transfer-Encoding: binary");
header('Content-Disposition: attachment; filename='. basename($file));
header('Content-Length: '.filesize($file));
ob_clean(); #THIS!
flush();
readfile($file);
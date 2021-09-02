<?php
$file = fopen('file.txt', 'w');
fwrite($file, 'hello world');
fclose($file);

// https://stackoverflow.com/questions/39833496/zip-a-file-and-protect-with-a-password-in-php
echo system('zip -P pass /out/from_php_5_5.zip file.txt');

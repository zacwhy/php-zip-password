<?php
$file = fopen('text.txt', 'w');
fwrite($file, 'hello world');
fclose($file);

// https://www.php.net/manual/en/ziparchive.setencryptionname.php
$zip = new ZipArchive();
if ($zip->open('/out/from_php_7_2.zip', ZipArchive::CREATE) === TRUE) {
    $zip->setPassword('secret');
    $zip->addFile('text.txt');
    $zip->setEncryptionName('text.txt', ZipArchive::EM_AES_256);
    $zip->close();
    echo "Ok\n";
} else {
    echo "KO\n";
}


// https://www.php.net/manual/en/ziparchive.setpassword.php
//
// $zip = new ZipArchive;
// $res = $zip->open('/out/from_php_7_2.zip', ZipArchive::CREATE);
// if ($res === TRUE) {
//     $zip->addFromString('test.txt', 'file content goes here');
//     $zip->setEncryptionName('test.txt', ZipArchive::EM_AES_256, 'passw0rd');
//     $zip->close();
//     echo 'ok';
// } else {
//     echo 'failed';
// }

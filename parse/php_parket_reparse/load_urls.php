<?php

header('Content-Type: text/html; charset=windows-1251');
header('Content-Type: text/html; charset=utf-8');
//                 caci@leeching.net   mail
//    db                us                 pass

require_once ('../phpQuery/phpQuery/phpQuery.php');
require_once 'setings.php';
require_once 'PhpDebuger/debug.php';

$fname="anfloors_paths.txt";
if (($handle = fopen($fname, "r")) !== FALSE) {
	$id=0;
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
      $arr[]= array($id++, $data[0]);
    }
    fclose($handle);
}




echo json_encode(  $arr);
?>
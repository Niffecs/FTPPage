<?php

// load all vars
include 'var.php';
include 'db.php';
$load = $_GET['db_key'];

// Store the file name into variable
$file = $storage_dir . '/' . $load . $content_value . $ext;
$filename = $load . $ext;

// Header content type
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');

// Read the file
@readfile($file);

?>

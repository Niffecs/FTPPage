<?

// load all vars
include 'var.php';
include 'db.php';
$load = $_GET['db_key'];

// Store the file name into variable
$file = $storage_dir . '/' . $load . $content_value . $ext;
$filename = $load . $ext;
// Header content type
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' .test_md5($load). '.pdf"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
header("Cache-Control: no-cache");
header("Pragma: no-cache");

// Read the file
@readfile($file);

?>

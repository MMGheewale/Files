<?php
$hash = $_GET['hash'];
echo "<script>window.location.href='download.php?hash=$hash'</script>";

$filename = $_GET['filename'];

if(file_exists($filename)) {

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header("Cache-Control: no-cache, must-revalidate");
header("Expires: 0");
header('Content-Disposition: attachment; filename="'.basename($filename).'"');
header('Content-Length: ' . filesize($filename));
header('Pragma: public');
flush();
readfile($filename);
die();
$hash = $_GET['hash'];
echo "<script>window.location.href='download.php?hash=$hash'</script>";
}

else{
echo "download failed";
echo "<script>window.location.href='download.php?hash=$hash'</script>";
}
echo "<script>window.location.href='download.php?hash=$hash'</script>";
?>
<?php
$file = 'test.pdf'; //This is the file where we save the    information
if (file_exists($file)) {
header('Content-Type: application/pdf');
header("Content-Disposition: attachment; filename=\"$file\"");
header("Cache-control: private");
header('Content-Type: application/force-download');
header("Content-Transfer-Encoding: binary");
header('Accept-Ranges: bytes');
readfile($file);
}
 else {
	echo "Something Wrong...";
}
?>
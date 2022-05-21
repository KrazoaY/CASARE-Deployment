<?php

$files = glob(dirname(__FILE__) . "/*.[pP][dD][fF]");

if (count($files) == 1) {
	$url = 'http://'.$_SERVER['HTTP_HOST'];
	$filename = basename($files[0]);
	header("Location: " . $url . "/" . $filename);
} else {
	print("<br><h2>Achtung, keine oder mehr als eine PDF Datei :-(</h2><br>");
	foreach ($files as $val) {
      print("<a href=\"" .basename($val). "\" /><br>");
    }
	print_r($files);
	print(count($files));
}

?>
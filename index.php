<?php

$files = glob(dirname(__FILE__) . "/*.[pP][dD][fF]");

if (count($files) == 1) {
	$url = 'http://'.$_SERVER['HTTP_HOST'];
	$filename = basename($files[0]);
	header("Location: " . $url . "/" . $filename);
} else {
	print("<br><h2>Wohin soll die Reise gehen?</h2><br>\n");
	foreach ($files as $val) {
      print("<a href=\"" .basename($val). "\" >".basename($val)."</a><br>\n");
    }
	echo "<hr>";
	print_r($files);
	echo "\n";
	print(count($files));
	echo "<hr>";
}

?>
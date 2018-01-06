<?php
	
$dir = "archived_images/";

if($dir_ptr = opendir($dir)) {
	
	while(($file = readdir($dir_ptr))) {
		if($file!="." && $file!="..") {
			echo "<img src=../" . $dir . $file . " width=300px>";
		}
	}
}
	
?>
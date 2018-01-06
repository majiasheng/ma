<?php include("include/header.php"); ?>

<p id="top"></p>
<div id="backtotop">
	<a href="#top"><img src="assets/backtotop.png" id="btt"></a>
</div>
		
<div class="magazine" >
<?php
	$dir = "archived_images/";

	if($dir_ptr = opendir($dir)) {

		while(($file = readdir($dir_ptr))) {
			if($file!="." && $file!=".." && $file!="projects" 
			&& $file!="index.html") {
				echo "<img src='" . $dir . $file . "' 
					class=\"mag-img\"> <br />";
				echo "<br /><br /><br /><br />";
			}
		}
	}
?>
</div>

<?php include("include/footer.php"); ?>

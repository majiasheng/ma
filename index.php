<?php 
include("include/header.php"); 
// routing
$uri_parts = explode ("/", $_SERVER['REQUEST_URI']);
$req_page = end($uri_parts);
?>

<div class="container">

<?php
if ($req_page == "different") {
    // TODO: show list of different things : magazine
    echo '<p><a href="magazine.php" >MAGAZINE</a></p>';
} else {

    echo '<p><a href="https://github.com/majiasheng/" target="_blank">Git Hub</a></p>';

}
?>

</div>

<?php include("include/footer.php"); ?>

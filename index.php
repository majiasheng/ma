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
?>

    <div class="diff-container">
        <a href="magazine.php" ><span id="magazine-name">magazine</a></span>
    </div>

<?php
} else {
?>

    <h2>Hello World, I'm</h2> 
    <h1 class="name">majiasheng /mah ʤiɑ ʃ aint/</h1>
    <div>
        <h3>Jia Sheng is my first name, and Ma is my last name.</h3>
        <h3>'MAJIASHENG' is more aesthetically pleasing than 'Jia Sheng Ma'</h3>

    </div>
<?php
}
?>

</div>

<?php include("include/footer.php"); ?>

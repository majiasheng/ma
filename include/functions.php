<?php

// $dir = "images/";
function show_images($dir) {
    if($dir_ptr = opendir($dir)) {

        while(($file = readdir($dir_ptr))) {
            $file_parts = pathinfo($file);

            if (isset($file_parts['extension'])) {
                $extension = strtolower($file_parts['extension']);
                if($extension == "jpg" 
                    || $extension == "png"
                    || $extension == "gif"
                    || $extension == "jpeg") {
                    echo "<li><img class=\"fancybox\" src='" 
                        . $dir . $file 
                        . "' class=\"mag-img\"></li>";
                }
            }
        }
    }
}

?>

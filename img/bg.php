<?php
function getRandomImage(){
    
    //Change this variable too change the directory for the scanner too look for files.
    $dir = 'img/';

    //The array that will hold all the names of images.
    $bgArray = array();
    
    //The scanner
    $files = scandir($dir);
    //Let's loop the folder for files and insert them into the array.
    foreach($files as $file){
        if($file == 'bg.php'){ //This file...
        }else if($file == '.'){ //Folder...
        }else if($file == '..'){ //Folder...
        }else{
            //DEBUG-LINE
            //echo $file . '<br />';
            array_push($bgArray, $file);
        }
    }
    $image = $bgArray[ rand(0, (count($bgArray)-1)) ];
    print $dir . $image;
}
?>

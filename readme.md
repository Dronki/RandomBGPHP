RandomBGPHP
============
A short script for reading a directory, putting the content into a array, choosing  
a random image and output the image-name and directory.

Usage/Install
-----
Install the script into whatever directory you like, then change the $dir to point to your  
image folder.
Then insert this in the beginning of your file that is going to use this script:  
    <?php
    require_once 'whereyouplacedthescript/bg.php';
    ?>
Then where you would like the image to be outputed:  
example:  
    <body background="<?php echo getRandomImage(); ?>>

License
-------
See index.php
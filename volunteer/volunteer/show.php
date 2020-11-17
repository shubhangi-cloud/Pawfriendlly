<?php

header("Content-type: image/jpeg");
$jpeg = fopen("/var/www/html/animal1/volunteer/images/temp.jpg","r");
$image = fread($jpeg,filesize("/var/www/html/animal1/volunteer/images/temp.jpg"));
echo $image;

?> 

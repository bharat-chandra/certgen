<?php
    $name = $_GET['name'];
    $image = imagecreatefrompng('certificate.png');
    $textcolor = imagecolorallocate($image, 0, 0,0);
    #import the custom font
    $fontpath = __DIR__."/font.otf";
    imagettftext($image,60,0,70,710,$textcolor, $fontpath, $name);
    header("Content-type:image/png");
    $file = $name.".png";
    $imagevar = imagepng($image);
?>




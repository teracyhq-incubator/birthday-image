<?php
    header("Content-Type: image/jpg");

    // Create the image
    $im = imagecreatefromjpeg('birthday.jpg');


    $grey = imagecolorallocate($im, 61, 61, 61);

    // The text to draw
    $text = $_GET['name'];
    // Replace path by your own font path
    $font = 'some_font.ttf';

    // Add some shadow to the text
    imagettftext($im, 12, 24, 188, 317, $grey, $font, $text);

    // Using imagepng() results in clearer text compared with imagejpeg()
    imagejpeg($im);
    imagedestroy($im);
?>

<?php
$code_length = 4;
$image_args['width']=160;
$image_args['height']=40;

$str = "3456789abcdefghijklmnpqrstuvwxyz";

for($i = 0 ; $i < $code_length; $i++) {
    $code .= $str[rand(0,22)];
}

$image = imagecreate($image_args['width'], $image_args['height']);

$background = imagecolorallocate($image, rand(0,255), rand(0,255), rand(0,255));

$text = imagecolorallocate($image, 0, 0, 0);

$red = imagecolorallocate($image, 242, 109, 128);

for ($i=0; $i < 300; $i++) { 
    imagesetpixel($image, 
                  rand(0,$image_args['width']), 
                  rand(0,$image_args['height']), 
                  $red
    );
}

$_SESSION["code"]=strtoupper($code);

imagestring($image,12, 59, 10, $code, $text);

ob_clean();

header("content-type: image/png");

imagepng($image);

imagedestroy($image);
?>
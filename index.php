<?php
require 'autoload.php';
use PHPImageWorkshop\ImageWorkshop;

$norwayLayer = ImageWorkshop::initFromPath('images/norway.jpg');
$watermarkLayer = ImageWorkshop::initFromPath('images/watermark.png');

$norwayLayer->addLayerOnTop($watermarkLayer, 12, 12, "LB");
$image = $norwayLayer->getResult();
header('Content-type: image/jpeg');
imagejpeg($image, null, 95); // We choose to show a JPG with a quality of 95%
exit;
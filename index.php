<?php
include "php-facedetection-0.1.0/FaceDetector.php";
 
$detector = new svay\FaceDetector('php-facedetection-0.1.0/detection.dat');
$detector->faceDetect('imagenes/dolores-oriordan.jpg');
$detector->toJpeg();
 
?>
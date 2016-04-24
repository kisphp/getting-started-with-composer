<?php

// initialize repositories autoloader
require_once __DIR__ . '/../vendor/autoload.php';

// create thumbnail helper class
$thumbnail = new \Project\Thumbnail();

// generate small thumbnail image
$image = $thumbnail->create('php-logo.png', 0, 0);

// display image in the browser
echo '<img src="' . $image . '" alt="my image">';

<?php

namespace Project;

use Kisphp\ImageResizer;

class Thumbnail
{
    /**
     * @var ImageResizer
     */
    protected $imageResizer;

    public function __construct()
    {
        $this->imageResizer = new ImageResizer();
    }

    /**
     * @param string $filename
     * @param int $width
     * @param int $height
     *
     * @return string
     */
    public function create($filename, $width, $height = 0)
    {
        $this->imageResizer->load(__DIR__ . '/../../images/' . $filename);
        $this->imageResizer->resize($width, $height);

        return base64_encode($this->imageResizer->display());
    }
}


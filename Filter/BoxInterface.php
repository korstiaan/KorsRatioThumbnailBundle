<?php

namespace Kors\Bundle\RatioThumbnailBundle\Filter;

use Imagine\Image\ImageInterface;

interface BoxInterface
{
	public function getBox(ImageInterface $image);
}
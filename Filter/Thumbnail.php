<?php

namespace Kors\Bundle\RatioThumbnailBundle\Filter;

use Imagine\Image\ImageInterface;
use Imagine\Filter\FilterInterface;

class Thumbnail implements FilterInterface
{
	/**
	 * @var RatioThumbnailBoxInterface
	 */
	private $box;
	
	/**
	 * @param RatioThumbnailBox $box
	 */
	public function __construct(BoxInterface $box)
	{
		$this->box = $box;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see Imagine\Filter.FilterInterface::apply()
	 */
	public function apply(ImageInterface $image)
	{	
		return $image->thumbnail($this->box->getBox($image));
	}
}
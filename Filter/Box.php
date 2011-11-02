<?php
namespace Kors\Bundle\RatioThumbnailBundle\Filter;

use Imagine\Image\ImageInterface;

class Box implements BoxInterface
{
	/**
	 * @var array
	 */
	private $def = array();
	
	public function __construct(array $def) 
	{
		if (!(isset($def['width']) XOR isset($def['height']))) {
			throw new \InvalidArgumentException('Only width or height should be specified');
		}
		$this->def = $def;
	}
	
	/**
	 * 
	 * @param 	ImageInterface $image
	 * @return	Box
	 */
	public function getBox(ImageInterface $image)
	{
		$size	= $image->getSize();
		$ratio 	= $size->getWidth() / $size->getHeight();
		if (isset($this->def['width'])) {
			$width 	= (int)$this->def['width'];
			$height = round($width / $ratio);			
		} else {
			$height = (int)$this->def['height'];
			$width 	= round($ratio * $height);
		}
		
		return new \Imagine\Image\Box($width, $height);
	}
}
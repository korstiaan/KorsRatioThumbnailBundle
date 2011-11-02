<?php
namespace Kors\Bundle\RatioThumbnailBundle\Filter;

use Avalanche\Bundle\ImagineBundle\Imagine\Filter\Loader\LoaderInterface;

class Loader implements LoaderInterface
{
	/**
	 * (non-PHPdoc)
	 * @see Avalanche\Bundle\ImagineBundle\Imagine\Filter\Loader.LoaderInterface::load()
	 */
    public function load(array $options = array())
    {
        return new Thumbnail(new Box($options));
    }
}
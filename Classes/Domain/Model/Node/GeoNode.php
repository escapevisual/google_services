<?php

/**
 * Sitemap Geo node
 */

namespace FRUIT\GoogleServices\Domain\Model\Node;

use FRUIT\GoogleServices\Domain\Model\AbstractModel;
use TYPO3\CMS\Extbase\Mvc\Exception\InvalidArgumentValueException;

/**
 * Sitemap Geo
 */
class GeoNode extends AbstractModel
{

    /**
     * The Geo format: kml, kmz or georss
     *
     * @var string
     */
    protected $format;

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param string $format
     *
     * @throws InvalidArgumentValueException
     */
    public function setFormat($format)
    {
        $format = strtolower($format);
        if (!in_array($format, [
            'kml',
            'kmz',
            'georss'
        ])
        ) {
            throw new InvalidArgumentValueException(
                '$format have to be kml, kmz or georss',
                23479823479283
            );
        }
        $this->format = $format;
    }
}

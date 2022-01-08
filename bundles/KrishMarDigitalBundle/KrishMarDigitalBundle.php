<?php

namespace KrishMarDigitalBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;

class KrishMarDigitalBundle extends AbstractPimcoreBundle
{
    public function getJsPaths()
    {
        return [
            '/bundles/krishmardigital/js/pimcore/startup.js'
        ];
    }
}
<?php
// src/AppBundle/Document/Areabrick/BlogRoll.php

namespace AppBundle\Document\Areabrick;

use Pimcore\Extension\Document\Areabrick\AbstractTemplateAreabrick;
use Pimcore\Model\Document\Tag\Area\Info;
use Symfony\Component\HttpFoundation\RedirectResponse;

class BlogRoll extends AbstractTemplateAreabrick
{
    public function getName()
    {
        return 'BlogRoll';
    }

    public function getDescription()
    {
        return 'BlogRoll';
    }

    public function getTemplateLocation()
    {
        return static::TEMPLATE_LOCATION_GLOBAL;
    }
    public function hasEditTemplate()
    {
        return true;
    }

    public function action(Info $info)
    {  
    }
    
}
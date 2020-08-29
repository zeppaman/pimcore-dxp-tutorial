<?php 

return [
    1 => [
        "id" => 1,
        "name" => "blogpage",
        "pattern" => "/\\/blog\\/(.*)?/",
        "reverse" => "/blog/%slug",
        "module" => NULL,
        "controller" => "@AppBundle\\Controller\\BlogController",
        "action" => NULL,
        "variables" => "slug",
        "defaults" => "",
        "siteId" => [

        ],
        "methods" => [

        ],
        "priority" => 0,
        "creationDate" => 1598637010,
        "modificationDate" => 1598690564
    ]
];

<?php

// all properties can be overriden in local.config.php, it is ignored by git
return array(

    // set locator root project path
    'Cti\Core\Module\Project' => array(
        'path' => dirname(dirname(__DIR__)),
    ),

    // set default base path
    'Cti\Core\Module\Web' => array(
        'base' => '/',
    ),

    // add sencha direct support
    'Cti\Core\Application\Generator' => array(
        'modules' => array(
            'Cti\Direct\Direct'
        )
    )
);

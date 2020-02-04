<?php

/**
 * Metadata version
 */


$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id' => 'oaexternalurl',
    'title' => [
        'de' => 'External url modul - test',
        'en' => 'External url module - test',
    ],
    'description' => [
        'de' => 'Das Modul testet die Mehrsprachenfunktionen',
        'en' => 'This module tests the multi lingual functionality',
    ],
    'thumbnail' => '',
    'version' => '1.0',
    'author' => 'wgmv',
    'url' => '',
    'email' => '',
    'extend' => [

    ],
    'controllers' => [
    ],
    'templates' => [
    ],
    'blocks' => [
        [
            'template' => 'page/details/inc/productmain.tpl',
            'block' => 'details_productmain_shortdesc',
            'file' => 'views/blocks/productmain__details_productmain_shortdesc.tpl',
        ],
        [
            'template' => 'article_main.tpl',
            'block' => 'admin_article_main_form',
            'file' => 'views/blocks/admin/article_main__admin_article_main_form.tpl',
        ],

    ],
    'settings' => [
        [
//            'group' => '',
//            'name' => '',
//            'type' => '',
//            'value' => ,
        ],

    ],
    'events' => [
        'onActivate' => 'wgmv\ExternalUrl\Core\Events\Setup::onActivate',
        'onDeactivate' => 'wgmv\ExternalUrl\Core\Events\Setup::onDeactivate',
    ],
];

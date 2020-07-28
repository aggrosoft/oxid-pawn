<?php

$sMetadataVersion = '2.0';

$aModule = array(
    'id'           => 'agpawn',
    'title'        => 'Article Pawn',
    'description'  => 'Show and configure article pawn',
    'thumbnail'    => '',
    'version'      => '1.0.1',
    'author'       => 'Aggrosoft GmbH',
    'extend'      => array(
        \OxidEsales\Eshop\Application\Model\Article::class => Aggrosoft\Pawn\Application\Model\PawnArticle::class
    ),
    'settings' => array(
        array('group' => 'agpawn_settings', 'name' => 'fDefaultPawn',  'type' => 'str',   'value' => ''),
        array('group' => 'agpawn_settings', 'name' => 'blPawnVatOnTop',  'type' => 'bool',   'value' => false),
    ),
    'blocks' => array(
        [
            'template' => 'widget/product/listitem_infogrid.tpl',
            'block' => 'widget_product_listitem_infogrid_price',
            'file' => '/views/blocks/widget_product_price.tpl',
        ],
        [
            'template' => 'widget/product/listitem_grid.tpl',
            'block' => 'widget_product_listitem_infogrid_price',
            'file' => '/views/blocks/widget_product_price.tpl',
        ],
        [
            'template' => 'widget/product/listitem_line.tpl',
            'block' => 'widget_product_listitem_line_price',
            'file' => '/views/blocks/widget_product_price.tpl',
        ]
    )
);

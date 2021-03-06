<?php

$sMetadataVersion = '2.0';

$aModule = array(
    'id'           => 'agpawn',
    'title'        => 'Article Pawn',
    'description'  => 'Show and configure article pawn',
    'thumbnail'    => '',
    'version'      => '1.0.5',
    'author'       => 'Aggrosoft GmbH',
    'extend'      => array(
        \OxidEsales\Eshop\Application\Model\Article::class => Aggrosoft\Pawn\Application\Model\PawnArticle::class,
        \OxidEsales\Eshop\Application\Model\Basket::class => Aggrosoft\Pawn\Application\Model\PawnBasket::class,
        \OxidEsales\Eshop\Application\Model\Order::class => Aggrosoft\Pawn\Application\Model\PawnOrder::class,
        \OxidEsales\Eshop\Application\Model\OrderArticle::class => Aggrosoft\Pawn\Application\Model\PawnOrderArticle::class,
        \OxidEsales\Eshop\Application\Model\BasketItem::class => Aggrosoft\Pawn\Application\Model\PawnBasketItem::class
    ),
    'settings' => array(
        array('group' => 'agpawn_settings', 'name' => 'fDefaultPawn',  'type' => 'str',   'value' => ''),
        array('group' => 'agpawn_settings', 'name' => 'blPawnVatOnTop',  'type' => 'bool',   'value' => false),
    ),
    'events'       => array(
        'onActivate'   => '\Aggrosoft\Pawn\Core\Events::onActivate'
    ),
    'blocks' => array(
        [
            'template' => 'widget/product/listitem_infogrid.tpl',
            'block' => 'widget_product_listitem_infogrid_price',
            'file' => '/views/blocks/widget_product_listitem_price.tpl',
        ],
        [
            'template' => 'widget/product/listitem_grid.tpl',
            'block' => 'widget_product_listitem_grid_price',
            'file' => '/views/blocks/widget_product_listitem_price.tpl',
        ],
        [
            'template' => 'widget/product/listitem_line.tpl',
            'block' => 'widget_product_listitem_line_price',
            'file' => '/views/blocks/widget_product_listitem_price.tpl',
        ],
        [
            'template' => 'page/checkout/inc/basketcontents.tpl',
            'block' => 'checkout_basketcontents_summary_table_inner',
            'file' => '/views/blocks/checkout_basketcontents_summary_table_inner.tpl',
        ],
        [
            'template' => 'page/checkout/inc/basketcontents_list.tpl',
            'block' => 'checkout_basketcontents_basketitem_unitprice',
            'file' => '/views/blocks/checkout_basketcontents_basketitem_unitprice.tpl',
        ],
        [
            'template' => 'page/checkout/inc/basketcontents_list.tpl',
            'block' => 'checkout_basketcontents_basketitem_totalprice',
            'file' => '/views/blocks/checkout_basketcontents_basketitem_totalprice.tpl',
        ],
        [
            'template' => 'page/details/inc/productmain.tpl',
            'block' => 'details_productmain_price_value',
            'file' => '/views/blocks/details_productmain_price_value.tpl',
        ],
        [
            'template' => 'article_main.tpl',
            'block' => 'admin_article_main_extended',
            'file' => '/views/blocks/admin_article_main_extended.tpl',
        ]
    )
);

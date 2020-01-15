<?php

namespace SunlightExtend\AdminCategoryHide;

use Sunlight\Database\SimpleTreeFilter;
use Sunlight\Plugin\ExtendPlugin;

class AdminCategoryHidePlugin extends ExtendPlugin
{

    function overrideSelect($args)
    {
        if (isset($_GET['p']) && $_GET['p'] === 'content-articles-edit') {
            $args['filter'] = new SimpleTreeFilterPriv(['type' => $args['options']['type']]);
        }
    }
}

class SimpleTreeFilterPriv extends SimpleTreeFilter
{
    function __construct(array $filter)
    {
        parent::__construct($filter);
        $this->sql .= ' AND %__node__%.`level`<' . _priv_level;
    }
}
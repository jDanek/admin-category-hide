<?php

namespace SunlightExtend\AdminCategoryHide;

use Sunlight\Plugin\ExtendPlugin;
use Sunlight\Util\Request;

/**
 * Class AdminCategoryHidePlugin
 * 
 * @author Jirka Daněk <jdanek.eu>
 */
class AdminCategoryHidePlugin extends ExtendPlugin
{
    public function overrideSelect(array $args): void
    {
        if (Request::get('p') === 'content-articles-edit') {
            $args['filter'] = new SimpleTreeFilterPriv(['type' => $args['options']['type']]);
        }
    }
}

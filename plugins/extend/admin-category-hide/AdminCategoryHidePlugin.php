<?php

namespace SunlightExtend\AdminCategoryHide;

use Sunlight\Plugin\ExtendPlugin;

/**
 * Class AdminCategoryHidePlugin
 * 
 * @author Jirka Daněk <jdanek.eu>
 */
class AdminCategoryHidePlugin extends ExtendPlugin
{
    public function overrideSelect(array $args): void
    {
        if (isset($_GET['p']) && $_GET['p'] === 'content-articles-edit') {
            $args['filter'] = new SimpleTreeFilterPriv(['type' => $args['options']['type']]);
        }
    }
}

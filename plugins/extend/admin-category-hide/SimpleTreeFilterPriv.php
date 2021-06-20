<?php

namespace SunlightExtend\AdminCategoryHide;

use Sunlight\Database\SimpleTreeFilter;
use Sunlight\Database\TreeReader;

/**
 * Class SimpleTreeFilterPriv
 *
 * @author Jirka Daněk <jdanek.eu>
 */
class SimpleTreeFilterPriv extends SimpleTreeFilter
{
    public function getNodeSql(TreeReader $reader): string
    {
        $sql = parent::getNodeSql($reader);
        $sql .= ' AND %__node__%.`level`<' . _priv_level;
        return $sql;
    }
}
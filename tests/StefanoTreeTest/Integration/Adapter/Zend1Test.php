<?php

declare(strict_types=1);

namespace StefanoTreeTest\Integration\Adapter;

use StefanoTree\NestedSet\Adapter\AdapterInterface;
use StefanoTree\NestedSet\Adapter\Zend1;
use StefanoTree\NestedSet\Options;
use StefanoTreeTest\TestUtil;

class Zend1Test extends AdapterAbstract
{
    /**
     * @return AdapterInterface
     */
    protected function getAdapter(): AdapterInterface
    {
        if (null === $this->adapter) {
            $options = new Options(array(
                                       'tableName' => 'tree_traversal',
                                       'idColumnName' => 'tree_traversal_id',
                                   ));

            if ('pgsql' == TEST_STEFANO_DB_VENDOR) {
                $options->setSequenceName('tree_traversal_tree_traversal_id_seq');
            }

            $this->adapter = new Zend1($options, TestUtil::getZend1DbAdapter());
        }

        return $this->adapter;
    }
}

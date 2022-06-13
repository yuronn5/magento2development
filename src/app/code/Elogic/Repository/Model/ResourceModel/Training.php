<?php
namespace Elogic\Repository\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;

class Training extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('test_table', 'test_id');
    }
}

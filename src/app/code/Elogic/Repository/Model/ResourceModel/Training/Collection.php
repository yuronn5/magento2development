<?php
namespace Elogic\Repository\Model\ResourceModel\Training;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection{
    protected $_idFieldName = 'test_id';

    protected function _construct()
    {
        $this->_init('Elogic\Repository\Model\Training', 'Elogic\Repository\Model\ResourceModel\Training');
    }

    /**
     * Returns pairs block_id - title
     *
     * @return array
     */
    public function toOptionArray()
    {
        return $this->_toOptionArray('test_id', 'title');
    }

}

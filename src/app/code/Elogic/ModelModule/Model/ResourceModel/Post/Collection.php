<?php
namespace Elogic\ModelModule\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'entity_id';
//    protected $_eventPrefix = 'elogic_brands_item_collection';
//    protected $_eventObject = 'post_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Elogic\ModelModule\Model\Post',
            'Elogic\ModelModule\Model\ResourceModel\Post');
    }

}

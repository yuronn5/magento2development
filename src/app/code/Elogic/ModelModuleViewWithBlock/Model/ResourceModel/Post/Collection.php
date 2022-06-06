<?php
namespace Elogic\ModelModuleViewWithBlock\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'entity_id';


    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Elogic\ModelModuleViewWithBlock\Model\Post',
            'Elogic\ModelModuleViewWithBlock\Model\ResourceModel\Post');
    }

}

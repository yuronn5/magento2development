<?php
namespace Elogic\ModelModuleViewWithBlock\Model;

class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'elogic_brands_view';

    protected $_cacheTag = 'elogic_brands_view';

    protected $_eventPrefix = 'elogic_brands_view';

    protected function _construct()
    {
        $this->_init('Elogic\ModelModuleViewWithBlock\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}

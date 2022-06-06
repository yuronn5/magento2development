<?php
namespace Elogic\ModelModule\Model;

class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'elogic_brands_item';

    protected $_cacheTag = 'elogic_brands_item';

    protected $_eventPrefix = 'elogic_brands_item';

    protected function _construct()
    {
        $this->_init('Elogic\ModelModule\Model\ResourceModel\Post');
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

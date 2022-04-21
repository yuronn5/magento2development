<?php

namespace Elogic\MyProductColectionByHelper\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory
     */
    protected $_productCollectionFactory;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory
    ) {
        parent::__construct($context);
        $this->_productCollectionFactory = $productCollectionFactory;
    }
    public function getProductCollectionByCategories()
    {
        $categories = [6,8,10];//category ids array
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        $collection->addCategoriesFilter(['in' => $categories]);
        return $collection;
    }
}

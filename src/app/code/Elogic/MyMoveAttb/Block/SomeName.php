<?php

namespace Elogic\MyMoveAttb\Block;



class SomeName extends \Magento\Catalog\Block\Product\View      //тут екстендимось від класу в якому вже є наш атрибут
{

    /**
     * get product name
     * @return string
     */
    public function getProductName():string
    {
        return $this->getProduct()->getName();
    }

    /**
     * get Block atb on pdp
     * @return mixed
     */
    public function getBlockValue()
    {
     return $this->getProduct()->getResource()->getAttribute('custom_attribute_backend')->getFrontend()->getValue($this->getProduct());
    }

}

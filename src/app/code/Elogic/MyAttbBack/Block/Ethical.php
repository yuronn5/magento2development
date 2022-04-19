<?php
namespace Elogic\MyAttbBack\Block;

use Magento\Catalog\Model\Product;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;

class Ethical extends Template {

    /**
     * @var Registry;
     */
    protected $registry;

    /**
     * @var Product;
     */
    protected $product;

    public function __construct(Template\Context $context,
                                Registry $registry,
                                array $data)
    {
        $this->registry = $registry;


        parent::__construct($context, $data);
    }

    public function getProduct() {
        if (is_null($this->product)) {
            $this->product = $this->registry->registry('product');

            if(!$this->product->getId()) {
                throw new LocalizedException(__('Failed to initialize product'));
            }
        }
        return $this->product;
    }

    public function getProductEthical() {
        return $this->getProduct()->getData('custom_attribute_backend');
    }

}
// for showing on front

<?php

namespace Elogic\SetGiftBySku\Observer;

use Magento\Framework\Event\ObserverInterface;
use Elogic\SetGiftBySku\Helper\Config;
use Magento\Catalog\Model\Product;
use Magento\Framework\Event\Observer;

use Magento\Framework\App\RequestInterface;


class AddtoCart implements ObserverInterface
{
    protected $_productRepository;
    protected $_cart;
    protected $formKey;
    protected $config;


    public function __construct(Config $config,\Magento\Catalog\Model\ProductRepository $productRepository, \Magento\Checkout\Model\Cart $cart, \Magento\Framework\Data\Form\FormKey $formKey){
        $this->config = $config;
        $this->_productRepository = $productRepository;
        $this->_cart = $cart;
        $this->formKey = $formKey;
    }
    public function execute(\Magento\Framework\Event\Observer $observer)
    {

        $item = $observer->getEvent()->getData('quote_item');
        $product = $observer->getEvent()->getData('product');
        $item = ($item->getParentItem() ? $item->getParentItem() : $item);
        $_product_sku = $product->getSku();

        // Enter the id of the prouduct which are required to be added to avoid recurrssion

            if ($product->getId() != 4) {
                $params = array(
                    'product' => 4,
                    'qty' => $product->getQty()
                );
                $_product = $this->_productRepository->getById(4);
                $this->_cart->addProduct($_product, $params);
                $this->_cart->save();
            }
        }

}

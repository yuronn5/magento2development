<?php

namespace Elogic\Sku\Observer;

use Magento\Framework\Event\ObserverInterface;
use Elogic\Sku\Helper\Config;
use Magento\Catalog\Model\Product;
use Magento\Framework\Event\Observer;

use Magento\Framework\App\RequestInterface;


class AddtoCart implements ObserverInterface
{
    protected $config;

    protected $_productRepository;
    protected $_cart;
    protected $formKey;

    /*
     * Get config from helper
     */
    public function __construct(
        Config $config,
        \Magento\Catalog\Model\ProductRepository $productRepository,
        \Magento\Checkout\Model\Cart $cart,
        \Magento\Framework\Data\Form\FormKey $formKey)
    {
        $this->config = $config;
        $this->_productRepository = $productRepository;
        $this->_cart = $cart;
        $this->formKey = $formKey;

    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $isEnable = $this->config->getProductEnable();
        $prodText = $this->config->getProductText();    //24-MB01
        $prodGift = $this->config->getProductGift();    // 6

        $product = $observer->getEvent()->getData('product');
        $_product_sku = $product->getSku();

        if ($_product_sku == $prodText) {
             $_product = $this->_productRepository->getById(5);
                $params = array(
                    'product' => 5,
                    'qty' => $product->getQty(),

                );
                $this->_cart->addProduct($_product,$params);
                $this->_cart->save();


//            $item = $observer->getEvent()->getData('quote_item');
//            $item = ($item->getParentItem() ? $item->getParentItem() : $item);
//            $price = 0; //set your price here
//            $item->setCustomPrice($price);
//            $item->setOriginalCustomPrice($price);
//            $item->getProduct()->setIsSuperMode(true);

//            $product = $observer->getData('product');


        }
    }






//$product = $observer->getData('product');

//        $_product_sku = $product->getSku();


//        if ($prodText != self::ENO) {
//
//        }









}

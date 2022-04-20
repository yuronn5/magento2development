<?php
namespace Elogic\SetGiftBySku\Helper;
use Magento\Framework\App\Helper\AbstractHelper;
use \Magento\Framework\App\Config\ScopeConfigInterface;

class Config extends \Magento\Framework\App\Helper\AbstractHelper
{
    const ENABLE_PATH = 'exampletab2/general/enable';
    const TEXT_PATH = 'exampletab2/general/display_text';
    const GIFT_PATH = 'exampletab2/general/display_gift';

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @param \Magento\Framework\App\Helper\Context   $context
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ){
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context);
    }

    public function getProductEnable()
    {
        return $product_yesno = $this->scopeConfig->getValue(self::ENABLE_PATH,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getProductText()
    {
         return $product_text = $this->scopeConfig->getValue(self::TEXT_PATH,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getProductGift()
    {
        return $product_gift = $this->scopeConfig->getValue(self::GIFT_PATH,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

}
?>

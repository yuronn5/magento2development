<?php

namespace Elogic\BeforePlugin\Plugin;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Psr\Log\LoggerInterface;

class ProductRepositoryExamplePlugin
{
    /**
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
     $this->logger = $logger;
    }

    public function beforeGetById(
        ProductRepositoryInterface $subject,
        $productId,
        $editMode = false,
        $storeId = null,
        $forceReload = false)
    {
        $this->logger->info('Before get product by Id msg' . $productId);
    }

}

<?php

namespace Elogic\BeforeAfterPlugin\Plugin;

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
        return [$productId, $editMode, $storeId, $forceReload];
    }

    public function afterGetById(
        ProductRepositoryInterface $subject,
        \Magento\Catalog\Api\Data\ProductInterface $result,
        $productId,
        $editMode = false,
        $storeId = null,
        $forceReload = false)
    {
        $this->logger->info('after get product by Id msg' . $result->getId());
        return $result;
    }

}

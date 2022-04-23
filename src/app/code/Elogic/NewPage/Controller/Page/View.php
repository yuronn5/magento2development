<?php
namespace Elogic\NewPage\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;

class View extends Action
{
    public function execute()
    {
        /** @var Page $resultpage */
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}

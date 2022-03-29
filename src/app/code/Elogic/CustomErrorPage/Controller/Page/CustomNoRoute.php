<?php


namespace Elogic\CustomErrorPage\Controller\Page;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;

class CustomNoRoute extends Action
{
    public function execute()
    {
        echo "this is our 404 error page";
    }

}

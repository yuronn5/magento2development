<?php


namespace Elogic\CustomErrorPage\Controller\Page;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;

class CustomNoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface
{
    public function process(\Magento\Framework\App\RequestInterface $request)
    {
        $request->setModuleName('noroutefound')->setControllerName('page')->setActionName('customnoroute');
    }


}

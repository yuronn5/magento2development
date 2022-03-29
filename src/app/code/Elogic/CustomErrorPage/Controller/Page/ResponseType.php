<?php

namespace Elogic\CustomErrorPage\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\Result\RedirectFactory;

class ResponseType extends Action
{
    protected $pageFactory;
    protected $jsonFactory;
    protected $raw;
    protected $redirectFactory;

    public function __construct(Context $context, PageFactory $pageFactory, JsonFactory $jsonFactory, Raw $raw, RedirectFactory $redirectFactory)
    {
        $this->pageFactory = $pageFactory;
        $this->jsonFactory = $jsonFactory;
        $this->raw = $raw;
        $this->redirectFactory = $redirectFactory;

        parent::__construct($context);
    }

    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */

    /**
     * Response types:
     * page result -1
     * json result -2
     * raw result-3
     * forward result-4
     * redirect result-5
     */

    public function execute()
    {
        return $this->pageFactory->create(); //1 /noroutefound/page/responsetype приведе нас на домашню сторінку

      //  return $this->jsonFactory->create()->setData(['key'=> 'value']); //2 шлях нам видасть дані в форматі джсон

//        $result = $this->raw->setContents("hello world");   //3 видасть строку хеловорд
//        return $result;

//        $result = $this->redirectFactory->create();
//        $result->setPath('noroutefound/page/customnoroute');  5//видасть нам наш шлях куда буде редіректити при переході на цей роутер
//        return $result;

    }


}

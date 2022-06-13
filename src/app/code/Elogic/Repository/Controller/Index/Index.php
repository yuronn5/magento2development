<?php

namespace Elogic\Repository\Controller\Index;

use Magento\Framework\App\Action\Action;
use Elogic\Repository\Api\TrainingRepositoryInterface;
use Elogic\Repository\Model\Training;

class Index extends Action
{
    protected $_training;
    protected $_trainingRepository;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        Training $trainingModel,
        TrainingRepositoryInterface $trainingRepository)
    {
        parent::__construct($context);

        $this->_training = $trainingModel;
        $this->_trainingRepository = $trainingRepository;
    }

    public function execute()
    {



//        $obj = $this->_training->load(1);
//
//
        $collection = $this->_trainingRepository->getList();

        foreach($collection as $item){
            var_dump($item->getTitle());
        }
    }
}

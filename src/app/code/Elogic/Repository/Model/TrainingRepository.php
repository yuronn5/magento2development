<?php
namespace Elogic\Repository\Model;
use \Elogic\Repository\Model\ResourceModel\Training\CollectionFactory;

class TrainingRepository implements \Elogic\Repository\Api\TrainingRepositoryInterface{
    protected $_trainingCollection;


    public function __construct(
        CollectionFactory $trainingCollection)
    {
        $this->_trainingCollection = $trainingCollection;
    }

    public function getList(){
        return $this->_trainingCollection->create();
    }
}

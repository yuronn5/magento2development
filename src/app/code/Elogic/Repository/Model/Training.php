<?php
namespace Elogic\Repository\Model;

use Magento\Framework\Model\AbstractModel;

class Training extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Elogic\Repository\Model\ResourceModel\Training');
    }
}

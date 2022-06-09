<?php
namespace Elogic\EventObserver\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{
    //https://magento.test/eventobserver/index/test  will show us "Hello World";
//    public function execute()
//    {
//        echo "Hello World";
//        exit;
//    }

    // after adding observer , the link will display Elogicccc - Event
    //Execute event successfully.
    public function execute()
    {
        $textDisplay = new \Magento\Framework\DataObject(array('text' => 'Elogicccc'));
        $this->_eventManager->dispatch('elogic_hola_display_text', ['mp_text' => $textDisplay]);
        echo $textDisplay->getText();
        exit;
    }
}

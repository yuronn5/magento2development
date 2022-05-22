<?php
namespace Elogic\MyViewModel\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class Custom implements ArgumentInterface
{
    public function __construct() {

    }
    public function getSomething()
    {
        return "Hello World with viewmodel";
    }
}

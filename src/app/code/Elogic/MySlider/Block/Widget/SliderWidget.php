<?php
namespace Elogic\MySlider\Block\Widget;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class SliderWidget extends Template implements BlockInterface
{
    protected $_template = "slider/slider.phtml";
}

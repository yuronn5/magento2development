<?php


namespace Elogic\MyAttbBack\Model\Config\Source;


use Magento\Eav\Model\ResourceModel\Entity\Attribute\OptionFactory;

use Magento\Framework\DB\Ddl\Table;

/**

 * Custom Attribute Renderer

 */

class Options extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource

{

    /**

     * @var OptionFactory

     */

    protected $optionFactory;

    /**

     * @param OptionFactory $optionFactory

     */

    /**

     * Get all options

     *

     * @return array

     */

    public function getAllOptions()

    {

        /* your Attribute options list*/

        $this->_options=[ ['label'=>'Select Options', 'value'=>''],

            ['label'=>'Custom option from my attribute back module -1', 'value'=>'0'],

            ['label'=>'Custom option from my attribute back module -2', 'value'=>'1'],

            ['label'=>'Custom option from my attribute back module -3', 'value'=>'2'],

            ['label'=>'Custom option from my attribute back module -4', 'value'=>'3'],

            ['label'=>'Custom option from my attribute back module -5', 'value'=>'4']

        ];

        return $this->_options;

    }

}


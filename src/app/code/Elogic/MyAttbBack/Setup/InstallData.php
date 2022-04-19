<?php

namespace Elogic\MyAttbBack\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;


class InstallData implements InstallDataInterface
{
    private $eavSetupFactory;

    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
        $eavSetup->addAttribute(

            \Magento\Catalog\Model\Product::ENTITY,

            'custom_attribute_backend',

            [
                'group' => 'General',

                'type' => 'int',

                'backend' => '',

                'frontend' => '',

                'label' => 'Custom title AttBack module',

                'input' => 'select',

                'class' => '',

                'source' => 'Elogic\MyAttbBack\Model\Config\Source\Options',

                'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_GLOBAL,

                'visible' => true,

                'required' => true,

                'user_defined' => false,

                'default' => '',

                'searchable' => false,

                'filterable' => false,

                'comparable' => false,

                'visible_on_front' => false,

                'used_in_product_listing' => true,

                'unique' => false
            ]
        );
    }
}

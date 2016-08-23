<?php
$this->startSetup();
$this->addAttribute(
    Mage_Catalog_Model_Category::ENTITY,
    'is_sale_on_homepage',
    array(
        'group' => "General Information",
        'input' => 'select',
        'option' => array(
            'value' => array(
                'is_sale_1'=> array(
                    0 =>'Women fashion'),
                'is_sale_2'=> array(
                    0 =>'Men fashion'),
            ),

        ),
        'type' => 'int',
        'label' => 'Is sale categoy on homepage',
        'backend' => '',
        'visible' => true,
        'required' => false,
        'visible_on_front' => false,
        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    )
);
$this->endSetup();
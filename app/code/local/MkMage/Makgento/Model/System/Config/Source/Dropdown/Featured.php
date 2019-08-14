<?php

class MKMage_Makgento_Model_System_Config_Source_Dropdown_Featured
{
    public function toOptionArray()
    {

        $_categories = Mage::getModel('catalog/category')->getCollection()
              ->addAttributeToSelect('*')
              ->addAttributeToFilter('is_active', 1);
        $cats = array();
        if ($_categories->getSize()) {
            foreach($_categories as $_category) {
              if ($_category->getName() == 'Default Category') {
                continue;
              }
                $cats[] = array(
                        'value' => (int)$_category->getId(),
                        'label' => $_category->getName(),
                    );
            }
        }

        return $cats;
    }
}
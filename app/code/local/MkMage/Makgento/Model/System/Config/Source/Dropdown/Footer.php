<?php

class MKMage_Makgento_Model_System_Config_Source_Dropdown_Footer
{
    public function toOptionArray()
    {

        $collection = Mage::getModel('cms/page')->getCollection()->addStoreFilter(Mage::app()->getStore()->getId());
        $collection->getSelect()->where('is_active = 1');
        $cms_list = array();
        $i=0;
        foreach($collection as $_c) {
        		$pdata = $_c->getData();
        		if($pdata['identifier']!='no-route' && $pdata['identifier']!='enable-cookies' && $pdata['identifier']!='home2') {
                	$cms_list[] = array(
                        'value' => $pdata['identifier'],
                        'label' => $pdata['title'],
                    );
                }
        }
       

        return $cms_list;
    }
}
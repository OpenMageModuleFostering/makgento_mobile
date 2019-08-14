<?php

class MKMage_Makgento_Model_System_Config_Source_Dropdown_Attributes
{
    public function toOptionArray()
{
    $attributes = Mage::getModel('catalog/product')->getAttributes();
    $attributeArray = array();
	$disabled=array("category_ids","created_at","custom_design","custom_design_from","custom_design_to","gallery","gift_message_available","group_price","has_options","image","image_label","custom_layout_update","category_ids","cost","country_of_manufacture","is_recurring","links_exist","links_purchased_separately","links_title","manufacturer","media_gallery","meta_description","meta_keyword","meta_title","minimal_price","msrp","msrp_display_actual_price_type","msrp_enabled","news_from_date","news_to_date","old_id","options_container","page_layout","price_type","price_view","recurring_profile","required_options","samples_title","shipment_type","sku_type","small_image","small_image_label","special_from_date","special_to_date","status","tax_class_id","thumbnail","thumbnail_label","updated_at","url_key","url_path","use_smd_colorswatch","visibility","weight_type");
    foreach($attributes as $a){

        foreach ($a->getEntityType()->getAttributeCodes() as $attributeName) {
		if(!in_array($attributeName,$disabled)){
            $attributeArray[] = array(
                'label' => $attributeName,
                'value' => $attributeName
            );
            }
        }
        break;
    }
    return $attributeArray; 
}
}
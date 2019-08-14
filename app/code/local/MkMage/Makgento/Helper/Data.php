<?php
class MKMage_Makgento_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function getIsActive() {
		
		$makgentoXmlEnabled = Mage::helper('core')->isModuleEnabled('MKMage_Makgento') ? true : false;
		$makgentoOutputEnabled = Mage::helper('core')->isModuleOutputEnabled("MKMage_Makgento") ? true : false;
		$makgentoModuleEnabled = Mage::getStoreConfig('makgento/general/enabled',Mage::app()->getStore()) ? true : false;
		$makgentoModuleRegistered = Mage::getStoreConfig('makgento/general/sent',Mage::app()->getStore()) ? true : false;
		
		return ( $makgentoXmlEnabled && $makgentoOutputEnabled && $makgentoModuleEnabled ) ? true : false;
	
	}
}
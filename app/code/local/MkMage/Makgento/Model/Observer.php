<?php
class MKMage_Makgento_Model_Observer
{   
	
	public function validateSystemSettings(Varien_Event_Observer $observer) {
		if (Mage::getStoreConfig('makgento/general/email') != '') {
			if (Mage::getStoreConfig('makgento/general/sent') != 1) {
				$body = '<p>Makgento registration for ' . Mage::getBaseUrl() . '</p>';
				$email = Mage::getModel('core/email');
				$email->setToName('MkMage');
				$email->setToEmail('igor@mkmage.com');
				$email->setBody($body);
				$email->setSubject('Makgento Customer Registration');
				$email->setFromEmail(Mage::getStoreConfig('makgento/general/email'));
				$email->setFromName(Mage::getBaseUrl());
				$email->setType('html');
				
				try {
					$email->send();
					Mage::getSingleton('core/session')->addSuccess('Thank you for registering with us.');
				}
				catch (Exception $e) {
					Zend_Debug::dump($e->getMessage());
					Mage::getSingleton('core/session')->addError('Could not proccess your request.');
				}
		
				Mage::getConfig()->saveConfig('makgento/general/sent', 1);
				Mage::getConfig()->saveConfig('makgento/general/enabled', 1);
			
			}
		}
		else{
			Mage::getConfig()->saveConfig('makgento/general/enabled', 0);
			Mage::getConfig()->saveConfig('makgento/general/sent', 0);
			Mage::getSingleton('core/session')->addWarning('Please enter email address to register the extension.');
		}
	}
   
}
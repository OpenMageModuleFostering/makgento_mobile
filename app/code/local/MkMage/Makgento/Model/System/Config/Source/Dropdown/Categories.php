<?php

class MKMage_Makgento_Model_System_Config_Source_Dropdown_Categories
{
	public function toOptionArray()
	{
		return array(
			array(
				'value' => 1,
				'label' => 'Products'
				),
			array(
				'value' => 2,
				'label' => 'Category products'
				),
			array(
				'value' => 3,
				'label' => 'List of Categories'
			),
			
			);
	}
}
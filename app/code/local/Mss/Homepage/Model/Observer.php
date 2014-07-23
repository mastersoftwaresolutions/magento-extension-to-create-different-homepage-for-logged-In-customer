<?php
class Mss_Homepage_Model_Observer
{
	const XML_PATH_FOR_CONFIG_TO_HOMEPAGE = 'mss/mss/page';
	const XML_PATH_FOR_CONFIG_TO_MSSENABLED = 'mss/mss/enable';
  	/**
	* @package    Mss_Homepage
	* @author     Yogendra Kumar (mss.yogendra@gmail.com)
	* @copyright  Copyright (c) 2014 mastersoftwaresolution
	*/

   	#home page
	public function homepage()
	{
		
		
		 $HomePageForLoggedIn = Mage::getStoreConfig(self::XML_PATH_FOR_CONFIG_TO_HOMEPAGE); 
		 $enabled = Mage::getStoreConfig(self::XML_PATH_FOR_CONFIG_TO_MSSENABLED); 
		if (Mage::helper('customer')->isLoggedIn() && $HomePageForLoggedIn && $enabled) {		    
		    Mage::app()->getStore()->setConfig( Mage_Cms_Helper_Page::XML_PATH_HOME_PAGE,
		        $HomePageForLoggedIn
		    );
      		  }	

	}	

}
?>

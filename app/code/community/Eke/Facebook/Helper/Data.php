<?php
class Eke_Facebook_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function isTrackerPixelEnabled()
    {
        return Mage::getStoreConfig("eke_facebook/tracker/enabled");
    }
	
    public function getTrackerPixelId()
    {
        return Mage::getStoreConfig("eke_facebook/tracker/pixel_id");
    }

}
<?php
class Hexasoft_FraudLabsPro_Model_System_Config_Source_View 
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'notification_approve', 'label' => Mage::helper('adminhtml')->__('Approve Status')),
            array('value' => 'notification_review', 'label' => Mage::helper('adminhtml')->__('Review Status')),
            array('value' => 'notification_reject', 'label' => Mage::helper('adminhtml')->__('Reject Status')),
        );
    }

    public function toArray()
    {
        return array(
            'notification_approve' => Mage::helper('adminhtml')->__('Approve Status'),
            'notification_review' => Mage::helper('adminhtml')->__('Review Status'),
            'notification_reject' => Mage::helper('adminhtml')->__('Reject Status'),
        );
    }
}
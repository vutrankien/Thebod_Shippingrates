<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category    Thebod
 * @package     Thebod_Shippingrates
 * @copyright   Copyright (c) 2012 Bastian Ike (http://thebod.de/)
 * @author      Bastian Ike <b-ike@b-ike.de>
 * @license     http://creativecommons.org/licenses/by/3.0/ CC-BY 3.0
 */
class Thebod_Shippingrates_Model_Observer
{
    /**
     * observer to send mail notification
     *
     * @param Varien_Event_Observer $observer
     * @return void
     */
    public function checkoutTypeOnepageSaveOrderAfter(Varien_Event_Observer $observer)
    {
        /* @var $shippingModel Thebod_Shippingrates_Model_Email */
        $shippingModel = Mage::getModel('shippingrates/email');
        $shippingModel->sendEmailNotification($observer->getOrder());
    }
}
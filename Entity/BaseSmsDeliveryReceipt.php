<?php
namespace Jhg\NexmoSmsBundle\Entity;

use Jhg\NexmoSmsBundle\Model\SmsDeliveryReceipt as SmsDeliveryReceiptModel;

/**
 * Class BaseSmsDeliveryReceipt
 * @package Jhg\NexmoBundle\Entity
 * @author Javi Hernández
 */
class BaseSmsDeliveryReceipt extends SmsDeliveryReceiptModel {
    /**
     * Hook on pre-persist operations
     */
    public function prePersist()
    {
        $this->createdAt = new \DateTime;
    }

} 
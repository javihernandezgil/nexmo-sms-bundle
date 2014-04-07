<?php
namespace Jhg\NexmoSmsBundle\Entity;

use Jhg\NexmoSmsBundle\Model\Sms as SmsModel;

/**
 * Class BaseSms
 * @package Jhg\NexmoBundle\Entity
 * @author Javi Hernández <javibilboweb@gmail.com>
 */
class BaseSms extends SmsModel {
    /**
     * Hook on pre-persist operations
     */
    public function prePersist()
    {
        $this->createdAt = new \DateTime;
    }

} 
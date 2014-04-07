<?php
namespace Jhg\NexmoSmsBundle\Sender;

use Doctrine\ORM\EntityManager;
use Jhg\NexmoBundle\Managers\SmsManager as BasicSmsManager;
use Jhg\NexmoSmsBundle\Entity\BaseSms;

/**
 * Class Sender
 * @package Jhg\NexmoSmsBundle\Sender
 * @Author Javi Hernández
 */
class Sender
{
    /**
     * @var \Jhg\NexmoBundle\Managers\SmsManager
     */
    protected $smsManager;

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $em;

    /**
     * @param BasicSmsManager $smsManager
     * @param EntityManager $em
     */
    public function __construct(BasicSmsManager $smsManager,EntityManager $em) {
        $this->smsManager = $smsManager;
        $this->em = $em;
    }


    /**
     * @param BaseSms $sms
     */
    public function sendText(BaseSms $sms) {
        $number = $sms->getTo();
        $text = $sms->getText();
        $fromName = $sms->getFrom();
        $statusReportReq = $sms->getStatusReportReq();

        $response = $this->smsManager->sendText($number,$text,$fromName,$statusReportReq);

        $sms->setMessageId($response->getMessageId());

        $this->em->persist($sms);
        $this->em->flush($sms);
    }
}
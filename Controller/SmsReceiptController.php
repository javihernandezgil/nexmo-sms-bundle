<?php
namespace Jhg\NexmoSmsBundle\Controller;
use Jhg\NexmoSmsBundle\Entity\SmsDeliveryReceipt;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class SmsReceiptController
 * @package Jhg\NexmoSmsBundle\Controller
 * @author Javi Hernández
 */
class SmsReceiptController extends Controller {

    public function deliveryReceiptAction() {
        $em = $this->getDoctrine()->getManager();

        $msisdn = $this->get('request')->get('msisdn');
        $to = $this->get('request')->get('to');
        $networkCode = $this->get('request')->get('network-code');
        $messageId = $this->get('request')->get('messageId');
        $price = $this->get('request')->get('price');
        $status = $this->get('request')->get('status');
        $scts = $this->get('request')->get('scts');
        $errCode = $this->get('request')->get('err-code');
        $messageTimestamp = $this->get('request')->get('message-timestamp');

        $smsRepository = $this->container->getParameter('jhg_nexmo_sms.sms.repository_short');
        $receiptClassName = $this->container->getParameter('jhg_nexmo_sms.receipt.class_name');

        $sms = $em->getRepository($smsRepository)->findOneByMessageId($messageId);

        if($sms === null) {
            $this->container->get('logger')->info("Nexmo delivery notification receipt, but message with id $messageId was not found. [$msisdn,$to,$networkCode,$price,$status,$scts,$errCode,$messageTimestamp]");
        } else {
            $receipt = new $receiptClassName();
            $receipt->setSms($sms);
            $receipt->setMsisdn($msisdn);
            $receipt->setTo($to);
            $receipt->setNetworkCode($networkCode);
            $receipt->setMessageId($messageId);
            $receipt->setPrice($price);
            $receipt->setStatus($status);
            $receipt->setScts($scts);
            $receipt->setErrCode($errCode);
            $receipt->setMessageTimestamp(new \DateTime($messageTimestamp));

            $sms->setStatus($status);
            $sms->setStatusedAt(new \DateTime());

            $em->persist($receipt);
            $em->flush();
        }

        return new Response('',Response::HTTP_OK);
    }
}
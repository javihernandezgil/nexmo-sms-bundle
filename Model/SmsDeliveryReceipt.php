<?php
namespace Jhg\NexmoSmsBundle\Model;

/**
 * Class SmsDeliveryReceipt
 * @package Jhg\NexmoSmsBundle\Model
 * @author Javi Hernández
 */
class SmsDeliveryReceipt {

    const ERROR_0  = 'Delivered';
    const ERROR_1	= 'Unknown';
    const ERROR_2	= 'Absent Subscriber - Temporary';
    const ERROR_3	= 'Absent Subscriber - Permanent';
    const ERROR_4	= 'Call barred by user';
    const ERROR_5	= 'Portability Error';
    const ERROR_6	= 'Anti-Spam Rejection';
    const ERROR_7	= 'Handset Busy';
    const ERROR_8	= 'Network Error';
    const ERROR_9	= 'Illegal Number';
    const ERROR_10	= 'Invalid Message';
    const ERROR_11	= 'Unroutable';
    const ERROR_99	= 'General Error';

    /**
     * @var integer
     */
    protected $id;

    /**
     * Returns the sms delivery receipt id.
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @var Sms
     */
    protected $sms;

    /**
     * @var string
     */
    protected $msisdn;

    /**
     * @var string
     */
    protected $to;

    /**
     * @var integer
     */
    protected $networkCode;

    /**
     * @var string
     */
    protected $messageId;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $scts;

    /**
     * @var integer
     */
    protected $errCode;

    /**
     * @var string
     */
    protected $error;

    /**
     * @var \DateTime
     */
    protected $messageTimestamp;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @param int $errCode
     */
    public function setErrCode($errCode)
    {
        $this->errCode = $errCode;

        if(defined("\\Jhg\\NexmoSmsBundle\\Model\\SmsDeliveryReceipt::ERROR_$errCode")) {
            $this->setError(constant("\\Jhg\\NexmoSmsBundle\\Model\\SmsDeliveryReceipt::ERROR_$errCode"));
        }
    }

    /**
     * @return int
     */
    public function getErrCode()
    {
        return $this->errCode;
    }

    /**
     * @param string $error
     */
    public function setError($error)
    {
        $this->error = $error;
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param string $messageId
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;
    }

    /**
     * @return string
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * @param \DateTime $messageTimestamp
     */
    public function setMessageTimestamp($messageTimestamp)
    {
        $this->messageTimestamp = $messageTimestamp;
    }

    /**
     * @return \DateTime
     */
    public function getMessageTimestamp()
    {
        return $this->messageTimestamp;
    }

    /**
     * @param string $msisdn
     */
    public function setMsisdn($msisdn)
    {
        $this->msisdn = $msisdn;
    }

    /**
     * @return string
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }

    /**
     * @param int $networkCode
     */
    public function setNetworkCode($networkCode)
    {
        $this->networkCode = $networkCode;
    }

    /**
     * @return int
     */
    public function getNetworkCode()
    {
        return $this->networkCode;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $scts
     */
    public function setScts($scts)
    {
        $this->scts = $scts;
    }

    /**
     * @return string
     */
    public function getScts()
    {
        return $this->scts;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }

    /**
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param \Jhg\NexmoSmsBundle\Model\Sms $sms
     */
    public function setSms($sms)
    {
        $this->sms = $sms;
    }

    /**
     * @return \Jhg\NexmoSmsBundle\Model\Sms
     */
    public function getSms()
    {
        return $this->sms;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}
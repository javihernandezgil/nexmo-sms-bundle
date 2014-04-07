<?php
namespace Jhg\NexmoSmsBundle\Model;

/**
 * Class Sms
 * @package Jhg\NexmoSmsBundle\Model
 * @Author Javi Hernández
 */
class Sms {

    /**
     * @var integer
     */
    protected $id;

    /**
     * Returns the sms unique id.
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @var string
     */
    protected $from;

    /**
     * @var string
     */
    protected $to;

    /**
     * @var string
     */
    protected $text;

    /**
     * @var integer
     */
    protected $statusReportReq;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    protected $type;
    protected $clientRef;
    protected $networkCode;
    protected $vcard;
    protected $vcal;
    protected $ttl;
    protected $messageClass;
    protected $binaryBody;
    protected $binaryUdh;

    /**
     * @var string
     */
    protected $messageId;

    /**
     * @param string $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
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
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param integer $statusReportReq
     */
    public function setStatusReportReq($statusReportReq)
    {
        $this->statusReportReq = $statusReportReq;
    }

    /**
     * @return integer
     */
    public function getStatusReportReq()
    {
        return $this->statusReportReq;
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
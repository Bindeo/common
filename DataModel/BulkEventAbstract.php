<?php

namespace Bindeo\DataModel;

abstract class BulkEventAbstract extends DataModelAbstract implements BulkItemInterface
{
    protected $idBulkEvent;
    protected $idBulk;
    protected $clientType;
    protected $idClient;
    protected $name;
    /**
     * @var \DateTime
     */
    protected $timestamp;
    protected $data;

    // Optionals
    protected $ip;
    protected $transaction;
    protected $bulkExternalId;

    /**
     * @return mixed
     */
    public function getIdBulkEvent()
    {
        return $this->idBulkEvent;
    }

    /**
     * @param mixed $idBulkEvent
     *
     * @return $this
     */
    public function setIdBulkEvent($idBulkEvent)
    {
        $this->idBulkEvent = $idBulkEvent;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdBulk()
    {
        return $this->idBulk;
    }

    /**
     * @param mixed $idBulk
     *
     * @return $this
     */
    public function setIdBulk($idBulk)
    {
        $this->idBulk = $idBulk;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClientType()
    {
        return $this->clientType;
    }

    /**
     * @param mixed $clientType
     *
     * @return $this
     */
    public function setClientType($clientType)
    {
        $this->clientType = $clientType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param mixed $idClient
     *
     * @return $this
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param string $mask
     *
     * @return mixed
     */
    public function getFormattedTimestamp($mask = self::DATETIME_MASK)
    {
        if ($this->timestamp) {
            return $this->timestamp->format($mask);
        } else {
            return null;
        }
    }

    /**
     * @param mixed  $timestamp
     * @param string $mask
     *
     * @return $this
     */
    public function setTimestamp($timestamp, $mask = self::DATETIME_MASK)
    {
        if ($timestamp instanceof \DateTime) {
            $this->timestamp = $timestamp;
        } else {
            $this->timestamp = \DateTime::createFromFormat($mask, $timestamp);
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param mixed $ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * @param mixed $transaction
     *
     * @return $this
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBulkExternalId()
    {
        return $this->bulkExternalId;
    }

    /**
     * @param mixed $bulkExternalId
     *
     * @return $this
     */
    public function setBulkExternalId($bulkExternalId)
    {
        $this->bulkExternalId = $bulkExternalId;

        return $this;
    }
}
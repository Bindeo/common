<?php

namespace Bindeo\DataModel;

abstract class BlockChainAbstract extends DataModelAbstract
{
    protected $transaction;
    protected $net;
    protected $confirmed;
    protected $clientType;
    protected $idClient;
    protected $idIdentity;
    protected $hash;
    protected $jsonData;
    /**
     * @var \DateTime
     */
    protected $ctrlDate;
    protected $type;
    protected $idElement;
    protected $statusElement;

    // optional
    /**
     * @var \DateTime
     */
    protected $bcDate;
    protected $bcBlock;
    protected $bcSigner;

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
    public function getNet()
    {
        return $this->net;
    }

    /**
     * @param mixed $net
     *
     * @return $this
     */
    public function setNet($net)
    {
        $this->net = $net;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getConfirmed()
    {
        return $this->confirmed;
    }

    /**
     * @param mixed $confirmed
     *
     * @return $this
     */
    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;

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
    public function getIdIdentity()
    {
        return $this->idIdentity;
    }

    /**
     * @param mixed $idIdentity
     *
     * @return $this
     */
    public function setIdIdentity($idIdentity)
    {
        $this->idIdentity = $idIdentity;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param mixed $hash
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getJsonData()
    {
        return $this->jsonData;
    }

    /**
     * @param mixed $jsonData
     *
     * @return $this
     */
    public function setJsonData($jsonData)
    {
        $this->jsonData = $jsonData;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCtrlDate()
    {
        return $this->ctrlDate;
    }

    /**
     * @param string $mask
     *
     * @return mixed
     */
    public function getFormattedCtrlDate($mask = self::DATETIME_MASK)
    {
        if ($this->ctrlDate) {
            return $this->ctrlDate->format($mask);
        } else {
            return null;
        }
    }

    /**
     * @param mixed  $date
     * @param string $mask
     *
     * @return $this
     */
    public function setCtrlDate($date, $mask = self::DATETIME_MASK)
    {
        if ($date instanceof \DateTime) {
            $this->ctrlDate = $date;
        } else {
            $this->ctrlDate = \DateTime::createFromFormat($mask, $date);
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdElement()
    {
        return $this->idElement;
    }

    /**
     * @param mixed $idElement
     *
     * @return $this
     */
    public function setIdElement($idElement)
    {
        $this->idElement = $idElement;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatusElement()
    {
        return $this->statusElement;
    }

    /**
     * @param mixed $statusElement
     *
     * @return $this
     */
    public function setStatusElement($statusElement)
    {
        $this->statusElement = $statusElement;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBcDate()
    {
        return $this->bcDate;
    }

    /**
     * @param string $mask
     *
     * @return string
     */
    public function getFormattedBcDate($mask = self::DATETIME_MASK)
    {
        if ($this->bcDate) {
            return $this->bcDate->format($mask);
        } else {
            return null;
        }
    }

    /**
     * @param mixed  $bcDate
     * @param string $mask
     *
     * @return $this
     */
    public function setBcDate($bcDate, $mask = self::DATETIME_MASK)
    {
        if ($bcDate instanceof \DateTime) {
            $this->bcDate = $bcDate;
        } else {
            $this->bcDate = \DateTime::createFromFormat($mask, $bcDate);
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBcBlock()
    {
        return $this->bcBlock;
    }

    /**
     * @param mixed $bcBlock
     *
     * @return $this
     */
    public function setBcBlock($bcBlock)
    {
        $this->bcBlock = $bcBlock;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBcSigner()
    {
        return $this->bcSigner;
    }

    /**
     * @param mixed $bcSigner
     *
     * @return $this
     */
    public function setBcSigner($bcSigner)
    {
        $this->bcSigner = $bcSigner;

        return $this;
    }
}
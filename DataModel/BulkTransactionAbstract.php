<?php

namespace Bindeo\DataModel;

abstract class BulkTransactionAbstract extends LocatableAbstract
{
    protected $idBulkTransaction;
    protected $externalId;
    protected $type;
    protected $elementsType;
    protected $clientType;
    protected $idClient;
    protected $closed;
    protected $numItems;
    protected $structure;
    protected $hash;
    protected $status;
    protected $account;

    // Optionals
    protected $transaction;
    protected $confirmed;
    protected $files;
    protected $events;

    /**
     * @return mixed
     */
    public function getIdBulkTransaction()
    {
        return $this->idBulkTransaction;
    }

    /**
     * @param mixed $idBulkTransaction
     *
     * @return $this
     */
    public function setIdBulkTransaction($idBulkTransaction)
    {
        $this->idBulkTransaction = $idBulkTransaction;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @param mixed $externalId
     *
     * @return $this
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;

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
    public function getElementsType()
    {
        return $this->elementsType;
    }

    /**
     * @param mixed $elementsType
     *
     * @return $this
     */
    public function setElementsType($elementsType)
    {
        $this->elementsType = $elementsType;

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
    public function getClosed()
    {
        return $this->closed;
    }

    /**
     * @param mixed $closed
     *
     * @return $this
     */
    public function setClosed($closed)
    {
        $this->closed = $closed;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumItems()
    {
        return $this->numItems;
    }

    /**
     * @param mixed $numItems
     *
     * @return $this
     */
    public function setNumItems($numItems)
    {
        $this->numItems = $numItems;

        return $this;
    }

    /**
     * Increment num items
     *
     * @param int $num [optional]
     *
     * @return $this
     */
    public function incNumItems($num = 1)
    {
        $this->numItems = ($this->numItems ? $this->numItems : 0) + $num;

        return $this;
    }

    /**
     * @param bool $decoded [optional]
     *
     * @return mixed
     */
    public function getStructure($decoded = false)
    {
        return ($this->structure and $decoded) ? json_decode($this->structure, true) : $this->structure;
    }

    /**
     * @param mixed $structure
     *
     * @return $this
     */
    public function setStructure($structure)
    {
        $this->structure = $structure;

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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param mixed $account
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->account = $account;

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
     * @return array
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @param array $files
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->files = $files;

        return $this;
    }

    /**
     * @return array
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param array $events
     *
     * @return $this
     */
    public function setEvents($events)
    {
        $this->events = $events;

        return $this;
    }
}
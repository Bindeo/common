<?php

namespace Bindeo\DataModel;

abstract class BlockChainAbstract extends DataModelAbstract
{
    protected $transaction;
    protected $net;
    protected $idClient;
    protected $hash;
    protected $date;
    protected $type;
    protected $idElement;

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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;

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
}
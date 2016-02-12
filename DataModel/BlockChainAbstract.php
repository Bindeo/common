<?php

namespace Bindeo\DataModel;

abstract class BlockChainAbstract extends DataModelAbstract
{
    protected $_transaction;
    protected $_net;
    protected $_idClient;
    protected $_hash;
    protected $_date;
    protected $_type;
    protected $_idElement;

    /**
     * @return mixed
     */
    public function getTransaction()
    {
        return $this->_transaction;
    }

    /**
     * @param mixed $transaction
     *
     * @return $this
     */
    public function setTransaction($transaction)
    {
        $this->_transaction = $transaction;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNet()
    {
        return $this->_net;
    }

    /**
     * @param mixed $net
     *
     * @return $this
     */
    public function setNet($net)
    {
        $this->_net = $net;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->_idClient;
    }

    /**
     * @param mixed $idClient
     *
     * @return $this
     */
    public function setIdClient($idClient)
    {
        $this->_idClient = $idClient;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHash()
    {
        return $this->_hash;
    }

    /**
     * @param mixed $hash
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->_hash = $hash;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->_date;
    }

    /**
     * @param mixed $date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->_date = $date;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * @param mixed $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->_type = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdElement()
    {
        return $this->_idElement;
    }

    /**
     * @param mixed $idElement
     *
     * @return $this
     */
    public function setIdElement($idElement)
    {
        $this->_idElement = $idElement;

        return $this;
    }
}
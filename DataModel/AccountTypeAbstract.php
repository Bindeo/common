<?php

namespace Bindeo\DataModel;

abstract class AccountTypeAbstract extends DataModelAbstract
{
    protected $_idType;
    protected $_type;
    protected $_cost;
    protected $_maxStorage;
    protected $_maxStampsMonth;

    /**
     * @return mixed
     */
    public function getIdType()
    {
        return $this->_idType;
    }

    /**
     * @param mixed $idType
     *
     * @return $this
     */
    public function setIdType($idType)
    {
        $this->_idType = $idType;

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
    public function getCost()
    {
        return $this->_cost;
    }

    /**
     * @param mixed $cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->_cost = $cost;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaxStorage()
    {
        return $this->_maxStorage;
    }

    /**
     * @param mixed $maxStorage
     *
     * @return $this
     */
    public function setMaxStorage($maxStorage)
    {
        $this->_maxStorage = $maxStorage;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaxStampsMonth()
    {
        return $this->_maxStampsMonth;
    }

    /**
     * @param mixed $maxStampsMonth
     *
     * @return $this
     */
    public function setMaxStampsMonth($maxStampsMonth)
    {
        $this->_maxStampsMonth = $maxStampsMonth;

        return $this;
    }
}
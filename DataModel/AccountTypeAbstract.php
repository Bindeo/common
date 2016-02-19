<?php

namespace Bindeo\DataModel;

abstract class AccountTypeAbstract extends DataModelAbstract
{
    protected $idType;
    protected $type;
    protected $cost;
    protected $maxStorage;
    protected $maxStampsMonth;

    /**
     * @return mixed
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * @param mixed $idType
     *
     * @return $this
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;

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
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param mixed $cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaxStorage()
    {
        return $this->maxStorage;
    }

    /**
     * @param mixed $maxStorage
     *
     * @return $this
     */
    public function setMaxStorage($maxStorage)
    {
        $this->maxStorage = $maxStorage;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaxStampsMonth()
    {
        return $this->maxStampsMonth;
    }

    /**
     * @param mixed $maxStampsMonth
     *
     * @return $this
     */
    public function setMaxStampsMonth($maxStampsMonth)
    {
        $this->maxStampsMonth = $maxStampsMonth;

        return $this;
    }
}
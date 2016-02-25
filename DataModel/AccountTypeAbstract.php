<?php

namespace Bindeo\DataModel;

abstract class AccountTypeAbstract extends DataModelAbstract
{
    protected $idType;
    protected $name;
    protected $cost;
    protected $maxFilesize;
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
    public function getMaxFilesize()
    {
        return $this->maxFilesize;
    }

    /**
     * @param mixed $maxFilesize
     *
     * @return $this
     */
    public function setMaxFilesize($maxFilesize)
    {
        $this->maxFilesize = $maxFilesize;

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
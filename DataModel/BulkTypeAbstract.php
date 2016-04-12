<?php

namespace Bindeo\DataModel;

abstract class BulkTypeAbstract extends DataModelAbstract
{
    protected $clientType;
    protected $idClient;
    protected $type;
    protected $elementsType;
    protected $bulkInfo;
    protected $defaultInfo;
    protected $callbackType;
    protected $callbackValue;

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
     * @param bool $decoded [optional]
     *
     * @return mixed
     */
    public function getBulkInfo($decoded = false)
    {
        return ($this->bulkInfo and $decoded) ? json_decode($this->bulkInfo, true) : $this->bulkInfo;
    }

    /**
     * @param mixed $bulkInfo
     *
     * @return $this
     */
    public function setBulkInfo($bulkInfo)
    {
        $this->bulkInfo = $bulkInfo;

        return $this;
    }

    /**
     * @param bool $decoded [optional]
     *
     * @return mixed
     */
    public function getDefaultInfo($decoded = false)
    {
        return ($this->defaultInfo and $decoded) ? json_decode($this->defaultInfo, true) : $this->defaultInfo;
    }

    /**
     * @param mixed $defaultInfo
     *
     * @return $this
     */
    public function setDefaultInfo($defaultInfo)
    {
        $this->defaultInfo = $defaultInfo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCallbackType()
    {
        return $this->callbackType;
    }

    /**
     * @param mixed $callbackType
     *
     * @return $this
     */
    public function setCallbackType($callbackType)
    {
        $this->callbackType = $callbackType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCallbackValue()
    {
        return $this->callbackValue;
    }

    /**
     * @param mixed $callbackValue
     *
     * @return $this
     */
    public function setCallbackValue($callbackValue)
    {
        $this->callbackValue = $callbackValue;

        return $this;
    }
}
<?php

namespace Bindeo\Filter;

class ProcessesFilter extends FilterAbstract
{
    protected $clientType;
    protected $idClient;
    protected $name;
    protected $type;
    protected $idStatus;
    protected $order;

    // Orders
    const ORDER_DATE_DESC = 1;
    const ORDER_DATE_ASC  = 2;
    const ORDER_NAME_ASC  = 3;
    const ORDER_NAME_DESC = 4;

    public function __construct($request = [])
    {
        parent::__construct($request);

        if (isset($request['clientType'])) {
            $this->clientType = $request['clientType'];
        }

        if (isset($request['idClient'])) {
            $this->idClient = $request['idClient'];
        }

        if (isset($request['name'])) {
            $this->name = $request['name'];
        }

        if (isset($request['type']) and isset($request['idStatus'])) {
            $this->type = $request['type'];
            $this->idStatus = $request['idStatus'];
        }

        if (isset($request['order']) and ($request['order'] >= 1 and $request['order'] <= 7)) {
            $this->order = $request['order'];
        } else {
            $this->order = self::ORDER_DATE_DESC;
        }
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
    public function getIdStatus()
    {
        return $this->idStatus;
    }

    /**
     * @param mixed $idStatus
     *
     * @return $this
     */
    public function setIdStatus($idStatus)
    {
        $this->idStatus = $idStatus;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param int $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }
}
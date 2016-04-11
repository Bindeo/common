<?php

namespace Bindeo\DataModel;

abstract class BlockchainInfoAbstract extends DataModelAbstract
{
    protected $idClient;
    protected $account;
    protected $numberAddresses;
    protected $totalUnspents;
    protected $availableUnspents;

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
    public function getNumberAddresses()
    {
        return $this->numberAddresses;
    }

    /**
     * @param mixed $numberAddresses
     *
     * @return $this
     */
    public function setNumberAddresses($numberAddresses)
    {
        $this->numberAddresses = $numberAddresses;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalUnspents()
    {
        return $this->totalUnspents;
    }

    /**
     * @param mixed $totalUnspents
     *
     * @return $this
     */
    public function setTotalUnspents($totalUnspents)
    {
        $this->totalUnspents = $totalUnspents;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAvailableUnspents()
    {
        return $this->availableUnspents;
    }

    /**
     * @param mixed $availableUnspents
     *
     * @return $this
     */
    public function setAvailableUnspents($availableUnspents)
    {
        $this->availableUnspents = $availableUnspents;

        return $this;
    }
}
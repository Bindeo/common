<?php

namespace Bindeo\DataModel;

abstract class OAuthClientAbstract extends DataModelAbstract implements SpendingStorageInterface
{
    protected $idClient;
    protected $name;
    protected $secret;
    protected $role;
    protected $email;
    protected $allowedIps;
    protected $storageLeft;
    protected $stampsLeft;
    protected $blockchainAccounts;

    /**
     * @var \DateTime
     */
    protected $ctrlDate;

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
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @param mixed $secret
     *
     * @return $this
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
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
     * @param mixed  $ctrlDate
     * @param string $mask
     *
     * @return $this
     */
    public function setCtrlDate($ctrlDate, $mask = self::DATETIME_MASK)
    {
        if ($ctrlDate instanceof \DateTime) {
            $this->ctrlDate = $ctrlDate;
        } else {
            $this->ctrlDate = \DateTime::createFromFormat($mask, $ctrlDate);
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAllowedIps()
    {
        return $this->allowedIps;
    }

    /**
     * @param mixed $allowedIps
     *
     * @return $this
     */
    public function setAllowedIps($allowedIps)
    {
        $this->allowedIps = $allowedIps;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStorageLeft()
    {
        return $this->storageLeft;
    }

    /**
     * @param mixed $storageLeft
     *
     * @return $this
     */
    public function setStorageLeft($storageLeft)
    {
        $this->storageLeft = $storageLeft;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStampsLeft()
    {
        return $this->stampsLeft;
    }

    /**
     * @param mixed $stampsLeft
     *
     * @return $this
     */
    public function setStampsLeft($stampsLeft)
    {
        $this->stampsLeft = $stampsLeft;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBlockchainAccounts()
    {
        return $this->blockchainAccounts;
    }

    /**
     * @param mixed $blockchainAccounts
     *
     * @return $this
     */
    public function setBlockchainAccounts($blockchainAccounts)
    {
        $this->blockchainAccounts = $blockchainAccounts;

        return $this;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return 2;
    }
}
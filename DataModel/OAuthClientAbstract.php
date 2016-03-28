<?php

namespace Bindeo\DataModel;

abstract class OAuthClientAbstract extends DataModelAbstract
{
    protected $idClient;
    protected $name;
    protected $secret;
    protected $role;
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
}
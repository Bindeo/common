<?php

namespace Bindeo\DataModel;

abstract class SignerAbstract extends LocatableAbstract
{
    protected $elementType;
    protected $elementId;
    protected $creator;
    protected $email;
    protected $phone;
    protected $name;
    protected $account;
    protected $signed;

    // Optionals
    protected $idUser;
    protected $idIdentity;

    /**
     * @return mixed
     */
    public function getElementType()
    {
        return $this->elementType;
    }

    /**
     * @param mixed $elementType
     *
     * @return $this
     */
    public function setElementType($elementType)
    {
        $this->elementType = $elementType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getElementId()
    {
        return $this->elementId;
    }

    /**
     * @param mixed $elementId
     *
     * @return $this
     */
    public function setElementId($elementId)
    {
        $this->elementId = $elementId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param mixed $creator
     *
     * @return $this
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;

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
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

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
    public function getSigned()
    {
        return $this->signed;
    }

    /**
     * @param mixed $signed
     *
     * @return $this
     */
    public function setSigned($signed)
    {
        $this->signed = $signed;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param mixed $idUser
     *
     * @return $this
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdIdentity()
    {
        return $this->idIdentity;
    }

    /**
     * @param mixed $idIdentity
     *
     * @return $this
     */
    public function setIdIdentity($idIdentity)
    {
        $this->idIdentity = $idIdentity;

        return $this;
    }

    // AUX METHODS
    /**
     * Clean dangerous attributes
     * @return $this
     */
    public function clean()
    {
        parent::clean();

        if ($this->email) {
            mb_strtolower($this->email);
        }

        return $this;
    }
}
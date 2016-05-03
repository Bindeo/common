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
    protected $document;
    protected $account;
    protected $token;
    /**
     * @var \DateTime
     */
    protected $tokenExpiration;
    protected $viewed;
    protected $signed;

    // Optionals

    /**
     * @var \DateTime
     */
    protected $date;
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
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param mixed $document
     *
     * @return $this
     */
    public function setDocument($document)
    {
        $this->document = $document;

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
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTokenExpiration()
    {
        return $this->tokenExpiration;
    }

    /**
     * @param mixed  $tokenExpiration
     * @param string $mask [optional]
     *
     * @return $this
     */
    public function setTokenExpiration($tokenExpiration, $mask = self::DATE_MASK)
    {
        if ($tokenExpiration instanceof \DateTime) {
            $this->tokenExpiration = $tokenExpiration;
        } else {
            $this->tokenExpiration = \DateTime::createFromFormat($mask, $tokenExpiration);
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getViewed()
    {
        return $this->viewed;
    }

    /**
     * @param mixed $viewed
     *
     * @return $this
     */
    public function setViewed($viewed)
    {
        $this->viewed = $viewed;

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
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $mask
     *
     * @return mixed
     */
    public function getFormattedDate($mask = self::DATETIME_MASK)
    {
        if ($this->date) {
            return $this->date->format($mask == 'DATE_ATOM' ? \DateTime::ATOM : $mask);
        } else {
            return null;
        }
    }

    /**
     * @param mixed  $date
     * @param string $mask
     *
     * @return $this
     */
    public function setDate($date, $mask = self::DATETIME_MASK)
    {
        if ($date instanceof \DateTime) {
            $this->date = $date;
        } else {
            $this->date = \DateTime::createFromFormat($mask, $date);
        }

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
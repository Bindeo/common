<?php

namespace Bindeo\DataModel;

abstract class ClientAbstract extends DataModelAbstract implements LocatableInterface
{
    protected $_idClient;
    protected $_email;
    protected $_type;
    protected $_name;
    protected $_surname;
    protected $_confirmed;
    protected $_lang;
    protected $_storageLeft;
    protected $_stampsLeft;
    // Optionals and temporary attributes
    protected $_ip;
    protected $_latitude;
    protected $_longitude;
    protected $_idGeonames;
    protected $_password;
    protected $_oldPassword;

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->_idClient;
    }

    /**
     * @param mixed $idClient
     *
     * @return $this
     */
    public function setIdClient($idClient)
    {
        $this->_idClient = $idClient;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->_email = $email;

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
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->_name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->_surname;
    }

    /**
     * @param mixed $surname
     *
     * @return $this
     */
    public function setSurname($surname)
    {
        $this->_surname = $surname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getConfirmed()
    {
        return $this->_confirmed;
    }

    /**
     * @param mixed $confirmed
     *
     * @return $this
     */
    public function setConfirmed($confirmed)
    {
        $this->_confirmed = $confirmed;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLang()
    {
        return $this->_lang;
    }

    /**
     * @param mixed $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->_lang = $lang;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStorageLeft()
    {
        return $this->_storageLeft;
    }

    /**
     * @param mixed $storageLeft
     *
     * @return $this
     */
    public function setStorageLeft($storageLeft)
    {
        $this->_storageLeft = $storageLeft;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStampsLeft()
    {
        return $this->_stampsLeft;
    }

    /**
     * @param mixed $stampsLeft
     *
     * @return $this
     */
    public function setStampsLeft($stampsLeft)
    {
        $this->_stampsLeft = $stampsLeft;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIp()
    {
        return $this->_ip;
    }

    /**
     * @param mixed $ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->_ip = $ip;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->_latitude;
    }

    /**
     * @param mixed $latitude
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->_latitude = $latitude;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->_longitude;
    }

    /**
     * @param mixed $longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->_longitude = $longitude;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdGeonames()
    {
        return $this->_idGeonames;
    }

    /**
     * @param mixed $idGeonames
     *
     * @return $this
     */
    public function setIdGeonames($idGeonames)
    {
        $this->_idGeonames = $idGeonames;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @param mixed $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->_password = $password;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOldPassword()
    {
        return $this->_oldPassword;
    }

    /**
     * @param mixed $oldPassword
     *
     * @return $this
     */
    public function setOldPassword($oldPassword)
    {
        $this->_oldPassword = $oldPassword;

        return $this;
    }
}
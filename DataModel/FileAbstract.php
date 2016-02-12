<?php

namespace Bindeo\DataModel;

abstract class FileAbstract extends DataModelAbstract implements LocatableInterface
{
    protected $_idFile;
    protected $_idClient;
    protected $_type;
    protected $_name;
    protected $_hash;
    protected $_size;
    protected $_date;
    protected $_status;

    // Optionals
    protected $_transaction;
    protected $_ip;
    protected $_idGeonames;
    protected $_latitude;
    protected $_longitude;
    protected $_path;

    /**
     * @return mixed
     */
    public function getIdFile()
    {
        return $this->_idFile;
    }

    /**
     * @param mixed $idFile
     *
     * @return $this
     */
    public function setIdFile($idFile)
    {
        $this->_idFile = $idFile;

        return $this;
    }

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
     * @param bool $bin
     *
     * @return mixed
     */
    public function getHash($bin = false)
    {
        return $bin ? hex2bin($this->_hash) : $this->_hash;
    }

    /**
     * @param mixed $hash
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->_hash = $hash;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->_size;
    }

    /**
     * @param mixed $size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->_size = $size;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->_date;
    }

    /**
     * @param mixed $date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->_date = $date;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * @param mixed $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->_status = $status;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransaction()
    {
        return $this->_transaction;
    }

    /**
     * @param mixed $transaction
     *
     * @return $this
     */
    public function setTransaction($transaction)
    {
        $this->_transaction = $transaction;

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
    public function getPath()
    {
        return $this->_path;
    }

    /**
     * @param mixed $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->_path = $path;

        return $this;
    }
}
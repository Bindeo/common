<?php

namespace Bindeo\DataModel;

/**
 * Abstract class with common functionality for locatable data models
 * @package Bindeo\DataModel
 */
abstract class LocatableAbstract extends DataModelAbstract implements LocatableInterface
{
    protected $ip;
    protected $latitude;
    protected $longitude;
    protected $idGeonames;

    /**
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param mixed $ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdGeonames()
    {
        return $this->idGeonames;
    }

    /**
     * @param mixed $idGeonames
     *
     * @return $this
     */
    public function setIdGeonames($idGeonames)
    {
        $this->idGeonames = $idGeonames;

        return $this;
    }
}
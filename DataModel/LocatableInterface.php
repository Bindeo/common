<?php

namespace Bindeo\DataModel;

/**
 * Defines a geolocatable data model
 * 
 * @package Bindeo\DataModel
 */
interface LocatableInterface
{
    public function getIp();

    public function getLatitude();

    public function getLongitude();

    public function getIdGeonames();

    public function setIp($ip);

    public function setLatitude($latitude);

    public function setLongitude($longitude);

    public function setIdGeonames($idGeonames);
}
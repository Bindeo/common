<?php

namespace Bindeo\DataModel;

/**
 * Interface for storable files
 * @package Bindeo\DataModel
 */
interface StorableFileInterface
{
    public function getClientType();
    
    public function getIdClient();

    public function getFileOrigName();

    public function getPath();

    public function setFileName($name);

    public function getFileName();

    public function getStorageType();
}
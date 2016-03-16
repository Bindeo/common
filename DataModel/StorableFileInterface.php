<?php

namespace Bindeo\DataModel;

/**
 * Interface for storable files
 * @package DataModel
 */
interface StorableFileInterface
{
    public function getIdUser();
    public function getFileOrigName();
    public function getPath();
    public function setFileName($name);
    public function getFileName();
    public function getStorageType();
}
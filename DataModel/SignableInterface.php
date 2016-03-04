<?php

namespace Bindeo\DataModel;

/**
 * Defines a signable data model
 * @package Bindeo\DataModel
 */
interface SignableInterface
{
    public function getHash();

    public function getFileOrigName();

    public function getSize();

    public function getType();

    public function getIdElement();

    public function getIdUser();
}
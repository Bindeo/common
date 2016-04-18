<?php

namespace Bindeo\DataModel;

/**
 * Defines a notarizable data model
 * @package Bindeo\DataModel
 */
interface NotarizableInterface
{
    public function getHash();

    public function getFileOrigName();

    public function getSize();

    public function getType();

    public function getIdElement();

    public function getClientType();

    public function getIdClient();
}
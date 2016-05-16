<?php

namespace Bindeo\DataModel;

/**
 * Defines a interface for clients
 * @package Bindeo\DataModel
 */
interface ClientsInterface
{
    /**
     * @return string
     */
    public function getClientType();

    /**
     * @return int
     */
    public function getIdClient();
}
<?php

namespace Bindeo\DataModel;

/**
 * Defines a main process type
 * @package Bindeo\DataModel
 */
interface ProcessInterface
{
    /**
     * @return string
     */
    public function getProcessType();

    /**
     * @return int
     */
    public function getElementId();

    /**
     * @return string
     */
    public function getElementName();

    /**
     * @return string
     */
    public function getClientType();

    /**
     * @return int
     */
    public function getIdClient();
}
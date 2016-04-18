<?php

namespace Bindeo\DataModel;

/**
 * Defines a signable data model
 * @package Bindeo\DataModel
 */
interface SignableInterface
{
    /**
     * @return string
     */
    public function getElementType();

    /**
     * @return int
     */
    public function getElementId();

    /**
     * @return array
     */
    public function getSigners();

    /**
     * @return string
     */
    public function getIp();
}
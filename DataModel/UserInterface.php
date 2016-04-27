<?php

namespace Bindeo\DataModel;

interface UserInterface
{
    /**
     * @return string
     */
    public function getUserType();

    /**
     * @return int
     */
    public function getIdUser();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @return string
     */
    public function getLang();

    /**
     * @return array
     */
    public function toArray();
}
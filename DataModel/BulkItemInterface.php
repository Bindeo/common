<?php

namespace Bindeo\DataModel;

/**
 * Interface for Bulk Transaction items
 * @package Bindeo\DataModel
 */
interface BulkItemInterface
{
    /**
     * @return int
     */
    public function getBulkExternalId();

    /**
     * @param int $idBulk
     *
     * @return $this
     */
    public function setBulkExternalId($idBulk);

    /**
     * @return string
     */
    public function getClientType();

    /**
     * @param string $clientType
     *
     * @return $this
     */
    public function setClientType($clientType);

    /**
     * @return int
     */
    public function getIdClient();

    /**
     * @param int $idClient
     *
     * @return $this
     */
    public function setIdClient($idClient);

    /**
     * @return string
     */
    public function getIp();

    /**
     * @param string $ip
     *
     * @return $this
     */
    public function setIp($ip);

    /**
     * @return array
     */
    public function toArray();
}
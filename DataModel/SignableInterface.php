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
     * @return string
     */
    public function getElementName();

    /**
     * @param SignerAbstract[] $signers
     *
     * @return $this
     */
    public function setSigners($signers);

    /**
     * @return SignerAbstract[]
     */
    public function getSigners();

    /**
     * @return int
     */
    public function getPendingSigners();

    /**
     * @return string
     */
    public function getIp();

    /**
     * @return int
     */
    public function getIdBulk();

    /**
     * @return array
     */
    public function toArray();

    /**
     * Store current signer in json format
     *
     * @param string $json
     *
     * @return $this
     */
    public function setSignerJson($json);

    /**
     * Get the params array for the current signer
     *
     * @return array
     */
    public function getSignerJson();

    /**
     * Get blockchain transaction
     *
     * @return string
     */
    public function getTransaction();
}
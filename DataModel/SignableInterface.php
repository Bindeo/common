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
     * @return string
     */
    public function getClientType();

    /**
     * @return int
     */
    public function getIdClient();

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
     * @return string
     */
    public function getIp();

    /**
     * @param int $idBulk
     *
     * @return $this
     */
    public function setIdBulk($idBulk);

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
     * @return array
     */
    public function getSignerJson();

    /**
     * Get blockchain transaction
     * @return string
     */
    public function getTransaction();
}
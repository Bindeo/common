<?php

namespace Bindeo\DataModel;

abstract class DocsSignatureAbstract extends DataModelAbstract
{
    protected $bulk;
    protected $blockchain;
    protected $files;
    protected $issuerType;
    protected $issuer;
    protected $signers;

    /**
     * Bulk transaction
     * @return mixed
     */
    public function getBulk()
    {
        return $this->bulk;
    }

    /**
     * @param mixed $bulk
     *
     * @return $this
     */
    public function setBulk($bulk)
    {
        $this->bulk = $bulk;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBlockchain()
    {
        return $this->blockchain;
    }

    /**
     * @param mixed $blockchain
     *
     * @return $this
     */
    public function setBlockchain($blockchain)
    {
        $this->blockchain = $blockchain;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @param mixed $files
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->files = $files;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIssuerType()
    {
        return $this->issuerType;
    }

    /**
     * @param mixed $issuerType
     *
     * @return $this
     */
    public function setIssuerType($issuerType)
    {
        $this->issuerType = $issuerType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * @param mixed $issuer
     *
     * @return $this
     */
    public function setIssuer($issuer)
    {
        $this->issuer = $issuer;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSigners()
    {
        return $this->signers;
    }

    /**
     * @param mixed $signers
     *
     * @return $this
     */
    public function setSigners($signers)
    {
        $this->signers = $signers;

        return $this;
    }
}